@extends('layouts.main')
@section('title')
    @if($galleries->id)
        Edit {{$galleries->name}}
    @else
         Tambah Gallery
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::galleries::index')}}">Gallery</a></div>
                @if($galleries->id)
                    <div class="breadcrumb-item">Edit {{$galleries->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Gallery</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$galleries->id ? route('admin::galleries::update',[$galleries]) : route('admin::galleries::store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($galleries->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" required="" value="{{$galleries->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Gambar</label>
                            @if($galleries->imageURL)
                                <div class="my-2">
                                    <img src="{{ asset($galleries->imageURL) }}"
                                         alt="Gambar {{ $galleries->judul }}" class="image-preview">
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
