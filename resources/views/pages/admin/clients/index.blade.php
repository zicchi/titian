@extends('layouts.main')
@section('title')
    Clients
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item">@yield('title')</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin::clients::create')}}" class="btn btn-primary">Tambah Client +</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Pekerjaan</th>
                                <th>Testimoni</th>
                                <th>Gambar Client</th>
                                <th>Action</th>
                            </tr>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->nama}}</td>
                                    <td>{{$client->pekerjaan}}</td>
                                    <td>{{$client->testimoni}}</td>
                                    <td>
                                            @if($client->imageURL)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($client->imageURL) }}" alt="" class="img-thumbnail" width="200px">
                                            @else
                                                <dd>Gambar tidak tersedia</dd>
                                            @endif

                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin::clients::edit',[$client])}}" class="btn btn-success">Update</a>
                                            <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$client->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                        </div>
                                        <form action="{{ route('admin::clients::destroy', [$client]) }}" method="post" class="hidden" id="delete-item-{{ $client->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{$clients->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
