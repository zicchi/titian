@extends('layouts.main')
@section('title')
    @if($clients->id)
        Edit {{$clients->name}}
    @else
         Tambah Client
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::clients::index')}}">Gallery</a></div>
                @if($clients->id)
                    <div class="breadcrumb-item">Edit {{$clients->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Gallery</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$clients->id ? route('admin::clients::update',[$clients]) : route('admin::clients::store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($clients->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="nama" required="" value="{{$clients->nama}}">
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" required="" value="{{$clients->pekerjaan}}">
                        </div>
                        <div class="form-group">
                            <label>Testimoni</label>
                            <input type="text" class="form-control" name="testimoni" required="" value="{{$clients->testimoni}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Gambar</label>
                            @if($clients->imageURL)
                                <div class="my-2">
                                    <img src="{{ asset($clients->imageURL) }}"
                                         alt="Gambar {{ $clients->name }}" class="image-preview">
                                </div>
                            @endif
                            <input type="file" name="image" dusk="image" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
