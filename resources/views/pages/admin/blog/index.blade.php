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
                <div class="breadcrumb-item">@yield('title')</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin::blogs::create')}}" class="btn btn-primary">Tambah Blog +</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->slug}}</td>
                                    <td>{{$blog->category->name}}</td>
                                    {{--                                <td>{{ $blog->tags->pluck('name')->whenEmpty(function() { echo "-"; }, function($collection) { return $collection->join(', '); }) }}</td>--}}
                                    <td>{{\Illuminate\Support\Str::limit($blog->description,30)}}</td>
                                    <td>
                                        @if($blog->published)
                                            <span class="badge badge-success">Terpublikasi</span>
                                        @else
                                            <span class="badge badge-danger">Belum Terpublikasi</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin::blogs::show',[$blog])}}" class="btn btn-info">Rincian</a>
                                            <a href="{{route('admin::blogs::edit',[$blog])}}" class="btn btn-success">Update</a>
                                            <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$blog->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                        </div>
                                        <form action="{{ route('admin::blogs::destroy', [$blog]) }}" method="post" class="hidden" id="delete-item-{{ $blog->id }}">
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
                                 $blogs->appends([
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
