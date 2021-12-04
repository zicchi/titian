@extends('layouts.main')
@section('title')
    Produk Kateogri
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
                    <a href="{{route('admin::product-category::create')}}" class="btn btn-primary">Tambah Produk Kateogri +</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->imageURL}}</td>
                                    <td>
                                        <a href="{{route('admin::product-category::edit',[$category])}}" class="btn btn-info">Update</a>
                                        <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$category->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                        <form action="{{ route('admin::product-category::destroy', [$category]) }}" method="post" class="hidden" id="delete-item-{{ $category->id }}">
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
                            {{$categories->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
