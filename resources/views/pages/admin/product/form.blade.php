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
                <form method="post" action="{{$product->id ? route('admin::product::update',[$product]) : route('admin::product::store') }}">
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
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" max="999999999" name="price" id="price" required="" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Produk</label>
                            <textarea class="form-control" name="description" id="description" required="">{{$product->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                                <div class="col-md-6">
                                    <div class="row">
                                        @if($tags->count())
                                            @foreach($tags->chunk($tags->count() > 1 ? $tags->count() / 2 : $tags->count() / 1) as $tagChunk)
                                                <div class="col-md-6">
                                                    @foreach($tagChunk as $tag)
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tag[]" value="{{ $tag->id }}" {{ in_array($tag->id, $tag_ids) ? 'checked' : '' }} x-model="tags">
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
