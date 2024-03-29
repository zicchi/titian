@extends('layouts.main')
@section('title')
    Product
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
                    <a href="{{route('admin::product::create')}}" class="btn btn-primary">Tambah Produk +</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Slug</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->slug}}</td>
{{--                                <td>{{ $product->tags->pluck('name')->whenEmpty(function() { echo "-"; }, function($collection) { return $collection->join(', '); }) }}</td>--}}
                                <td>Rp. {{number_format($product->price,2)}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin::product::show',[$product])}}" class="btn btn-info">Rincian</a>
                                        <a href="{{route('admin::product::edit',[$product])}}" class="btn btn-success">Update</a>
                                        <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$product->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                    </div>
                                    <form action="{{ route('admin::product::destroy', [$product]) }}" method="post" class="hidden" id="delete-item-{{ $product->id }}">
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
                           {{
                                $products->appends([
                                    'tag' => request()->input('tag'),
                                ])->links()
                            }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
