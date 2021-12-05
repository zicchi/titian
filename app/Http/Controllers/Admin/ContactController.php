<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(5);
        return view('pages.admin.contacts.index',[
            'contacts' => $contacts
        ]);
    }

    public function store(Request $request)
    {
        $contacts = new Contact();
        $contacts->address = $request->input('address');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->bio = $request->input('bio');
        $contacts->instagram = $request->input('instagram');
        $contacts->facebook = $request->input('facebook');
        $contacts->maps = $request->input('maps');
        $contacts->save();

        return redirect(route('admin::contacts::index'));
    }

    public function edit(Contact $contacts)
    {
        return view('pages.admin.contacts.form',[
            'contacts' => $contacts
        ]);
    }

    public function update(Request $request,Contact $contacts)
    {
        $contacts->address = $request->input('address');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->bio = $request->input('bio');
        $contacts->instagram = $request->input('instagram');
        $contacts->facebook = $request->input('facebook');
        $contacts->maps = $request->input('maps');
        $contacts->save();

        return redirect(route('admin::contacts::index'));
    }
}
