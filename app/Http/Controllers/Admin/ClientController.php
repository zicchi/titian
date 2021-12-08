<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Cache\Console\ClearCommand;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(5);
        return view('pages.admin.clients.index',[
            'clients' => $clients
        ]);
    }

    public function create()
    {
        $clients = new Client();
        return view('pages.admin.clients.form',[
            'clients' => $clients
        ]);
    }

    public function store(Request $request)
    {
        $clients = new Client();
        $clients->nama = $request->input('nama');
        $clients->pekerjaan = $request->input('pekerjaan');
        $clients->testimoni = $request->input('testimoni');
        if ($request->hasFile('image')) {
            $clients->foto_header = $request->file('image')->store('asset/images/clients',[
                'disk' => 'upload',
            ]);
        } else {
            $clients->imageURL = "";
        }
        $clients->save();

        return redirect(route('admin::clients::index'));
    }

    public function edit(client $clients)
    {
        return view('pages.admin.clients.form',[
            'clients' => $clients
        ]);
    }

    public function update(Request $request,Client $clients)
    {
        $clients->nama = $request->input('nama');
        $clients->pekerjaan = $request->input('pekerjaan');
        $clients->testimoni = $request->input('testimoni');
        if ($request->hasFile('image')) {
            $clients->foto_header = $request->file('image')->store('asset/images/clients',[
                'disk' => 'upload',
            ]);
        } else {
            $clients->imageURL = "";
        }
        $clients->save();

        return redirect(route('admin::clients::index'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect(route('admin::clients::index'));
    }
}
