@extends('layouts.main')
@section('title')
    Blog
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::blogs::index')}}">Blog</a></div>
                @if($blog->id)
                    <div class="breadcrumb-item">Edit {{$blog->title}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Blog</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$blog->id ? route('admin::blogs::update',[$blog]) : route('admin::blogs::store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($blog->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" required="" value="{{$blog->title}}">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori Blog</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option {{$category->id == $blog->blog_category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="my-editor form-control" id="my-editor" cols="30" rows="10">{{$blog->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Gambar</label>
                            @if($blog->imageUrl)
                                <div class="my-2">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($blog->imageUrl) }}"
                                         alt="Gambar {{ $blog->title }}" class="image-preview">
                                </div>
                            @endif
                            <input type="file" name="image" dusk="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status publikasi</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="published" value="1" {{ $blog->published ? 'checked' : '' }} x-model="tags">
                                    Terpublikasi
                                </label>
                            </div>
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
@push('bottom')
    <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-editor');
    </script>
@endpush
