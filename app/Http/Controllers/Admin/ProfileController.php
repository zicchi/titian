<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('pages.admin.profile.index',[
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if ($request->hasFile('image')) {
            $user->imageUrl = $request->file('image')->store('public/images/user/'.$user->name);
        } else {
            $user->imageUrl = "";
        }
        $user->save();

        return redirect(route('admin::profile::index'))->with('success','Update Berhasil !');
    }

    public function editPassword()
    {
        $user = auth()->user();
        return view('pages.admin.profile.change-password-form',[
            'user' => $user
        ]);
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        if ($request->input('password') == $request->input('verification')){
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return redirect(route('admin::profile::index'))->with('success','Sukses ubah password');

        }
        return redirect(route('admin::profile::edit-password'))->with('danger','Ubah password gagal, password tidak sama');
    }
}
