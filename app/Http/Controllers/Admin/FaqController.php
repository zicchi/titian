<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::paginate(5);
        return view('pages.admin.faqs.index',[
            'faqs' => $faqs
        ]);
    }

    public function create()
    {
        $faq = new Faq();
        return view('pages.admin.faqs.form',[
            'faq' => $faq
        ]);
    }

    public function store(Request $request)
    {
        $faq = new Faq();
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->save();

        return redirect(route('admin::faqs::index'));
    }

    public function edit(Faq $faq)
    {
        return view('pages.admin.faqs.form',[
            'faq' => $faq
        ]);
    }

    public function update(Request $request,Faq $faq)
    {
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->save();

        return redirect(route('admin::faqs::index'));
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect(route('admin::faqs::index'));
    }
}
