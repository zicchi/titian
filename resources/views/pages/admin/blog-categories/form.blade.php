@extends('layouts.main')
@section('title')
    @if($category->id)
        Edit {{$category->name}}
    @else
        Tambah Kategori
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::blog-category::index')}}">Blog Kategori</a></div>
                @if($category->id)
                    <div class="breadcrumb-item">Edit {{$category->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Tag</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$category->id ? route('admin::blog-category::update',[$category]) : route('admin::blog-category::store') }}">
                    @csrf
                    @if($category->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Kategori Blog</label>
                            <input type="text" class="form-control" name="name" required="" value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                            <label>Nama Slug</label>
                            <input type="text" class="form-control" name="slug" required="" value="{{$category->slug}}">
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
