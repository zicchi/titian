<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::paginate(5);
        return view('pages.admin.materials.index',[
            'materials' => $materials
        ]);
    }

    public function create()
    {
        $material = new Material();
        return view('pages.admin.materials.form',[
            'material' => $material
        ]);
    }

    public function store(Request $request)
    {
        $material = new Material();
        $material->name = $request->input('name');
        $material->save();

        return redirect(route('admin::materials::index'));
    }

    public function edit(Material $material)
    {
        return view('pages.admin.materials.form',[
            'material' => $material
        ]);
    }

    public function update(Request $request,Material $material)
    {
        $material->name = $request->input('name');
        $material->save();

        return redirect(route('admin::materials::index'));
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return redirect(route('admin::materials::index'));
    }
}
