<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use App\Imports\ExcelMaterial;
use Maatwebsite\Excel\Facades\Excel;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->type;
        $search = $request->search;
        $data = Material::when($type, function($query) use ($type, $search){
            $query->where($type,'like', '%'.$search.'%');
        })->paginate(20);
        return view('pages.material.index', compact('data'));
    }

    public function create()
    {
        return view('pages.material.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'material_description' => 'required',
            'base_unit_of_measure' => 'required',
            'unrestricted_use_stock' => 'nullable|numeric',
            'quality_inspection_stock' => 'nullable|numeric',
            'blocked_stock' => 'nullable|numeric',
            'in_transit_stock' => 'nullable|numeric',
            'valation_class' => 'nullable|numeric'
        ]);

        $material = Material::create($request->all());

        return redirect()->to(route('material.show', $material))->with([
            'level' => 'success',
            'message' => 'Material berhasil disimpan.'
        ]);
    }

    public function show(Material $material)
    {
        return view('pages.material.show', compact('material'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Material $material)
    {
        $material->update($request->all());

        return redirect()->back()->with([
            'level' => 'success',
            'message' => 'Material berhasil diupdate'
        ]);
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->to(route('material.index'))->with([
            'level' => 'success',
            'message' => 'Material berhasil dihapus.'
        ]);
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:xlsx|max:2048',
        ]);
        Excel::import(new ExcelMaterial, $request->file('file'));
        return redirect()->back()->withSuccess('Berhasil import file');
    }
}
