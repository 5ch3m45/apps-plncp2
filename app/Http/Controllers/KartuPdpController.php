<?php

namespace App\Http\Controllers;

use App\Models\PdpCard;
use App\Models\Cj70Material;
use Illuminate\Http\Request;

class KartuPdpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $is_arsip = $request->arsip == 1;
        $type = $request->type;
        $search = $request->search;
        $data = PdpCard::where('is_arsip',$is_arsip)->when($type, function($query) use ($type,$search){
            $query->where($type,'like',$search.'%');
        })->paginate(20);
        return view('pages.kartu-pdp.index', [
            'is_arsip' => $is_arsip,
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kartu-pdp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'nilai_spk' => str_replace('.', '', $request->nilai_spk),
        ]);
        $this->validate($request, [
            'nomor_spk' => 'required|string',
            'tanggal_spk' => 'required|date',
            'nama_rekanan' => 'required|string',
            'nilai_spk' => 'required|numeric',
            'pekerjaan' => 'required|string',
            'nomor_bastp' => 'required|string',
            'tanggal_awal_kontrak' => 'required|date',
            'tanggal_akhir_kontrak' => 'required|date'
        ]);

        PdpCard::create([
            'spk_number' => $request->nomor_spk,
            'spk_date' => $request->tanggal_spk,
            'spk_value' => $request->nilai_spk,
            'vendor_name' => $request->nama_rekanan,
            'work' => $request->pekerjaan,
            'bastp_number' => $request->nomor_bastp,
            'contract_start_date' => $request->tanggal_awal_kontrak,
            'contract_end_date' => $request->tanggal_akhir_kontrak
        ]);

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil menambahkan Kartu PDP'
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
        $data = PdpCard::with('cj70.materials')->find($id);
        return view('pages.kartu-pdp.show',[
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
        $request->merge([
            'nilai_spk' => str_replace('.', '', $request->nilai_spk),
        ]);
        $this->validate($request, [
            'nomor_spk' => 'required|string|unique:pdp_cards,spk_number,'.$id,
            'tanggal_spk' => 'required|date',
            'nama_rekanan' => 'required|string',
            'nilai_spk' => 'required|numeric',
            'pekerjaan' => 'required|string',
            'nomor_bastp' => 'required|string',
            'tanggal_awal_kontrak' => 'required|date',
            'tanggal_akhir_kontrak' => 'required|date'
        ]);

        PdpCard::find($id)->update([
            'spk_number' => $request->nomor_spk,
            'spk_date' => $request->tanggal_spk,
            'spk_value' => $request->nilai_spk,
            'vendor_name' => $request->nama_rekanan,
            'work' => $request->pekerjaan,
            'bastp_number' => $request->nomor_bastp,
            'contract_start_date' => $request->tanggal_awal_kontrak,
            'contract_end_date' => $request->tanggal_akhir_kontrak
        ]);

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil memperbaharui Kartu PDP'
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
        try {
            $pdpcard = PdpCard::find($id)->delete();
            return redirect()->route('kartu-pdp.index')->with([
                'level' => 'success',
                'message' => 'Berhasil menghapus Kartu PDP'
            ]);
        }catch(\Illuminate\Database\QueryException $ex) {
            if($ex->getCode() === '23000') {
                return redirect()->back()->with([
                    'level' => 'danger',
                    'message' => 'Tidak dapat menghapus Kartu PDP ini karena masih ada CJ70.'
                ]);
            }
        }
    }

    public function archive(Request $request, $id)
    {
        PdpCard::find($id)->update([
            'is_arsip' => 1,
        ]);

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Berhasil mengarsipkan Kartu PDP'
        ]);
    }
}
