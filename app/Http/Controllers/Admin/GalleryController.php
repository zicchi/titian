<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(5);
        return view('pages.admin.galleries.index',[
            'galleries' => $galleries
        ]);
    }

    public function create()
    {
        $galleries = new Gallery();
        return view('pages.admin.galleries.form',[
            'galleries' => $galleries
        ]);
    }

    public function store(Request $request)
    {
        $galleries = new Gallery();
        $galleries->judul = $request->input('judul');
        if ($request->hasFile('image')) {
            $galleries->imageUrl = $request->file('image')->store('public/storage/galleries');
        } else {
            $galleries->imageUrl = "";
        }
        $galleries->save();

        return redirect(route('admin::galleries::index'));
    }

    public function edit(Gallery $galleries)
    {
        return view('pages.admin.galleries.form',[
            'galleries' => $galleries
        ]);
    }

    public function update(Request $request,Gallery $galleries)
    {
        $galleries->judul = $request->input('judul');
        if ($request->hasFile('image')) {
            $galleries->imageUrl = $request->file('image')->store('public/storage/gallery');
        } else {
            $galleries->imageUrl = "";
        }
        $galleries->save();

        return redirect(route('admin::galleries::index'));
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect(route('admin::galleries::index'));
    }
}
