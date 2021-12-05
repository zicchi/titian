<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::paginate(5);
        return view('pages.admin.abouts.index',[
            'abouts' => $abouts
        ]);
    }

    public function store(Request $request)
    {
        $abouts = new About();
        $abouts->header_subtitle = $request->input('header_subtitle');
        $abouts->judul = $request->input('judul');
        $abouts->subjudul = $request->input('subjudul');
        $abouts->jargon = $request->input('jargon');
        $abouts->description = $request->input('description');
        if ($request->hasFile('image')) {
            $abouts->foto_header = $request->file('image')->store('public/storage/abouts');
        } else {
            $abouts->foto_header = "";
        }
        $abouts->save();

        return redirect(route('admin::abouts::index'));
    }

    public function edit(About $abouts)
    {
        return view('pages.admin.abouts.form',[
            'abouts' => $abouts
        ]);
    }

    public function update(Request $request,About $abouts)
    {
        $abouts->header_subtitle = $request->input('header_subtitle');
        $abouts->judul = $request->input('judul');
        $abouts->subjudul = $request->input('subjudul');
        $abouts->jargon = $request->input('jargon');
        $abouts->description = $request->input('description');
        if ($request->hasFile('image')) {
            $abouts->foto_header = $request->file('image')->store('public/storage/abouts');
        } else {
            $abouts->foto_header = "";
        }
        $abouts->save();

        return redirect(route('admin::abouts::index'));
    }
}
