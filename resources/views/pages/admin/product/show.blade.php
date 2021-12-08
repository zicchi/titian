@extends('layouts.main')
@section('title')
    {{$product->name}}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::product::index')}}">Product</a></div>
                <div class="breadcrumb-item">{{$product->name}}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <dt>ID Produk</dt>
                            <dd>#{{$product->id}}</dd>
                            <dt>Nama Produk</dt>
                            <dd>{{$product->name}}</dd>
                            <dt>Deskripsi Produk</dt>
                            <dd>{{$product->description}}</dd>
                            <dt>Harga</dt>
                            <dd>Rp. {{number_format($product->price,2)}}</dd>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            @if($product->imageUrl)
                                <img src="{{ asset($product->imageUrl) }}" alt="" class="img-thumbnail" width="400px">
                            @else
                                <dd>Gambar tidak tersedia</dd>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
