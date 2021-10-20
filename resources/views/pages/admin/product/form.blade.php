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
                <div class="breadcrumb-item active"><a href="{{route('admin::product::index')}}">product</a></div>
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
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Harga</label>
                            <input type="number" class="form-control" name="price" id="price" required="" value="{{$product->price}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi Produk</label>
                            <textarea class="form-control" name="description" id="description" required="">{{$product->description}}</textarea>
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
