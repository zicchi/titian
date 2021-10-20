<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate(5);
        return view('pages.admin.tags.index',[
            'tags' => $tags
        ]);
    }

    public function create()
    {
        $tag = new Tag();
        return view('pages.admin.tags.form',[
            'tag' => $tag
        ]);
    }

    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->save();

        return redirect(route('admin::tags::index'));
    }

    public function edit(Tag $tag)
    {
        return view('pages.admin.tags.form',[
            'tag' => $tag
        ]);
    }

    public function update(Request $request,Tag $tag)
    {
        $tag->name = $request->input('name');
        $tag->save();

        return redirect(route('admin::tags::index'));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect(route('admin::tags::index'));
    }
}
