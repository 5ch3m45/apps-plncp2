<?php

namespace App\Http\Controllers;

use App\Models\Cj70;
use App\Models\PdpCard;
use App\Models\Material;
use App\Models\Cj70Material;
use App\Imports\ExcelCj70;
use Illuminate\Http\Request;

class Cj70Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = $request->type;
        $search = $request->search;
        $data = Cj70Material::where(function($query) use ($type,$search){
            if($type){
                $materialfields = ['code','material_description'];
                $cj70fields = ['ref_doc_number','reservation','cost_element','period','doc_header_text','unloading_point','wbs_element','posting_date'];
                if(in_array($type,$cj70fields)){
                    $query->whereHas('cj70', function ($q) use ($type,$search){
                        $q->where('cj70s.'.$type,'like',$search.'%');
                    });
                }elseif(in_array($type,$materialfields)){
                    $query->whereHas('material', function ($q) use ($type,$search){
                        $q->where('materials.'.$type,'like',$search.'%');
                    });
                }else{
                    $query->where($type,'like',$search.'%');
                }
            }
        })->paginate(20);
        return view('pages.cj70.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spk = PdpCard::select('id','spk_number')->get();
        return view('pages.cj70.create',[
            'spk' => $spk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nomor_spk" => "required|exists:pdp_cards,id",
            "nomor_tug" => "required|string",
            "gl_account" => "required|string",
            "nomor_wbs" => "required|string",
            "master_asset.*" => "nullable|string",
            "material.*" => "nullable|exists:materials,id",
            "gardu.*" => "nullable|string",
            "alamat.*" => "nullable|string",
            "penyulang.*" => "nullable|string",
            "qty.*" => "required|numeric",
            "nilai_pekerjaan.*" => "nullable|string",
            "nilai_material.*" => "required|string",
            "nilai_overhead.*" => "nullable|string"
        ]);

        $spk = PdpCard::select('id','spk_number')->find($request->nomor_spk);
        $cj70 = Cj70::create([
            'pdp_card_id' => $request->nomor_spk,
            'ref_doc_number' => $request->nomor_tug,
            'cost_element' => $request->gl_account,
            'wbs_element' => $request->nomor_wbs,
            'unloading_point' => $spk->spk_number,
            'doc_header_text' => $spk->spk_number
        ]);
        $materials = [];
        foreach ($request->material as $key => $value) {
            $materials[] = [
                'cj70_id' => $cj70->id,
                'material_id' => $value,
                'master_asset' => $request->master_asset[$key],
                'substation' => $request->gardu[$key],
                'address' => $request->alamat[$key],
                'feeder' => $request->penyulang[$key],
                'qty' => $request->qty[$key],
                'rem_val_cnt_cur' => str_replace('.', '', $request->nilai_material[$key]),
                'capitalized_auc' => str_replace('.', '', $request->nilai_material[$key]),
                'job_value' => $request->nilai_pekerjaan[$key] ? str_replace('.', '', $request->nilai_pekerjaan[$key]) : 0,
                'overhead_value' => $request->nilai_overhead[$key] ? str_replace('.', '', $request->nilai_overhead[$key]) : 0,
                'updated_at' => now(),
                'created_at' => now()
            ];
        }
        Cj70Material::insert($materials);

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil menambahkan CJ70'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cj70::with('materials')->find($id);
        return view('pages.cj70.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spk = PdpCard::select('id','spk_number')->get();
        $data = Cj70::with('materials')->find($id);
        return view('pages.cj70.edit',[
            'data' => $data,
            'spk' => $spk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "nomor_spk" => "required|exists:pdp_cards,id",
            "nomor_tug" => "required|string",
            "gl_account" => "required|string",
            "nomor_wbs" => "required|string",
            "cj70_material.*" => "nullable|exists:cj70_materials,id",
            "master_asset.*" => "nullable|string",
            "material.*" => "nullable|exists:materials,id",
            "gardu.*" => "nullable|string",
            "alamat.*" => "nullable|string",
            "penyulang.*" => "nullable|string",
            "qty.*" => "required|numeric",
            "nilai_pekerjaan.*" => "nullable|string",
            "nilai_material.*" => "required|string",
            "nilai_overhead.*" => "nullable|string"
        ]);

        $spk = PdpCard::select('id','spk_number')->find($request->nomor_spk);
        $cj70 = Cj70::find($id);
        $cj70->update([
            'pdp_card_id' => $request->nomor_spk,
            'ref_doc_number' => $request->nomor_tug,
            'cost_element' => $request->gl_account,
            'wbs_element' => $request->nomor_wbs,
            'unloading_point' => $spk->spk_number,
            'doc_header_text' => $spk->spk_number
        ]);
        foreach ($request->cj70_material as $key => $value) {
            if($value){
                $materials = [
                    'material_id' => $request->material[$key],
                    'master_asset' => $request->master_asset[$key],
                    'substation' => $request->gardu[$key],
                    'address' => $request->alamat[$key],
                    'feeder' => $request->penyulang[$key],
                    'qty' => $request->qty[$key],
                    'rem_val_cnt_cur' => str_replace('.', '', $request->nilai_material[$key]),
                    'capitalized_auc' => str_replace('.', '', $request->nilai_material[$key]),
                    'job_value' => $request->nilai_pekerjaan[$key] ? str_replace('.', '', $request->nilai_pekerjaan[$key]) : 0,
                    'overhead_value' => $request->nilai_overhead[$key] ? str_replace('.', '', $request->nilai_overhead[$key]) : 0,
                ];
                Cj70Material::find($value)->update($materials);
            }else{
                $materials = [
                    'cj70_id' => $cj70->id,
                    'material_id' => $request->material[$key],
                    'master_asset' => $request->master_asset[$key],
                    'substation' => $request->gardu[$key],
                    'address' => $request->alamat[$key],
                    'feeder' => $request->penyulang[$key],
                    'qty' => $request->qty[$key],
                    'rem_val_cnt_cur' => str_replace('.', '', $request->nilai_material[$key]),
                    'capitalized_auc' => str_replace('.', '', $request->nilai_material[$key]),
                    'job_value' => $request->nilai_pekerjaan[$key] ? str_replace('.', '', $request->nilai_pekerjaan[$key]) : 0,
                    'overhead_value' => $request->nilai_overhead[$key] ? str_replace('.', '', $request->nilai_overhead[$key]) : 0,
                    'updated_at' => now(),
                    'created_at' => now()
                ];
                Cj70Material::insert($materials);
            }
        }

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil memperbaharui CJ70'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cj70 = Cj70::find($id);
        $cj70->materials()->delete();
        $cj70->delete();
        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil menghapus Cj70'
        ]);
    }

    public function destroy_cj70_material($id)
    {
        Cj70Material::find($id)->delete();
        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil menghapus Cj70 Material'
        ]);
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xlsx|max:2048',
        ]);
        \Excel::import(new ExcelCj70, $request->file('file'));
        return redirect()->back()->withSuccess('Berhasil import file');
    }

    public function get_material(Request $request)
    {
        $code = $request->code;
        $data = Material::where('code','like',$code.'%')->orWhere('material_description','like',$code.'%')->get();
        return response()->json($data);
    }
}
