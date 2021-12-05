@extends('layouts.main')
@section('title')
    @if($abouts->id)
        Edit {{$abouts->name}}
    @else
         Tambah Abouts
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::abouts::index')}}">Gallery</a></div>
                @if($abouts->id)
                    <div class="breadcrumb-item">Edit {{$abouts->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Gallery</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$abouts->id ? route('admin::abouts::update',[$abouts]) : route('admin::abouts::store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($abouts->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Header Subtitle</label>
                            <input type="text" class="form-control" name="header_subtitle" required="" value="{{$abouts->header_subtitle}}">
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" required="" value="{{$abouts->judul}}">
                        </div>
                        <div class="form-group">
                            <label>Sub Judul</label>
                            <input type="text" class="form-control" name="subjudul" required="" value="{{$abouts->subjudul}}">
                        </div>
                        <div class="form-group">
                            <label>Jargon</label>
                            <input type="text" class="form-control" name="jargon" required="" value="{{$abouts->jargon}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" required="" value="{{$abouts->description}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Gambar</label>
                            @if($abouts->foto_header)
                                <div class="my-2">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($abouts->foto_header) }}"
                                         alt="Gambar {{ $abouts->judul }}" class="image-preview">
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
