@extends('layouts.main')
@section('title')
    @if($product->id)
        Edit {{$product->name}}
    @else
        Tambah Product
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::product::index')}}">Product</a></div>
                @if($product->id)
                    <div class="breadcrumb-item">Edit {{$product->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Produk</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$product->id ? route('admin::product::update',[$product]) : route('admin::product::store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($product->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" class="form-control" name="name" id="name" required="" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori Produk</label>
                            <select name="category" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option {{$category->id == $product->product_category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" required="" value="{{$product->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" max="999999999" name="price" id="price" required="" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Produk</label>
                            <textarea class="form-control" name="description" id="description" required="">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Gambar</label>
                            @if($product->imageUrl)
                                <div class="my-2">
                                    <img src="{{ asset($product->imageUrl) }}"
                                         alt="Gambar {{ $product->name }}" class="image-preview">
                                </div>
                            @endif
                            <input type="file" name="image" dusk="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="slider">Slider Status</label>
                            <select name="slider" id="slider" class="form-control">
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Tags</label>
                                    <div class="row">
                                        @if($tags->count())
                                            @foreach($tags->chunk($tags->count() > 1 ? $tags->count() / 2 : $tags->count() / 1) as $tagChunk)
                                                <div class="col-md-6">
                                                    @foreach($tagChunk as $tag)
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tag[]" value="{{ $tag->id }}" {{ in_array($tag->id, $tag_ids) ? 'checked' : '' }}>
                                                                {{ $tag->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        @else
                                            <label for="" class="">Buat data tag terlebih dahulu !</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Bahan</label>
                                    <div class="row">
                                        @if($materials->count())
                                            @foreach($materials->chunk($materials->count() > 1 ? $materials->count() / 2 : $materials->count() / 1) as $materialChunk)
                                                <div class="col-md-6">
                                                    @foreach($materialChunk as $material)
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="material[]" value="{{ $material->id }}" {{ in_array($material->id, $material_ids) ? 'checked' : '' }} >
                                                                {{ $material->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        @else
                                            <label for="" class="">Buat data material terlebih dahulu !</label>
                                        @endif
                                    </div>
                                </div>
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
