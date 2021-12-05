@extends('layouts.main')
@section('title')
    Gallery
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
                    <a href="{{route('admin::galleries::create')}}" class="btn btn-primary">Tambah Gallery +</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{$gallery->id}}</td>
                                    <td>{{$gallery->judul}}</td>
                                    <td>
                                            @if($gallery->imageURL)
                                                <img src="{{ \Illuminate\Support\Facades\Storage::url($gallery->imageURL) }}" alt="" class="img-thumbnail" width="400px">
                                            @else
                                                <dd>Gambar tidak tersedia</dd>
                                            @endif

                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin::galleries::edit',[$gallery])}}" class="btn btn-success">Update</a>
                                            <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$gallery->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                        </div>
                                        <form action="{{ route('admin::galleries::destroy', [$gallery]) }}" method="post" class="hidden" id="delete-item-{{ $gallery->id }}">
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
                            {{$galleries->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
