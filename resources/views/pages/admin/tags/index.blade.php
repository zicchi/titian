@extends('layouts.main')
@section('title')
    Tag
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
                    <a href="{{route('admin::tags::create')}}" class="btn btn-primary">Tambah Tag +</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td><a href="{{route('admin::product::index',['tag' => $tag->name])}}">{{$tag->name}}</a></td>
                                    <td>
                                        <a href="{{route('admin::tags::edit',[$tag])}}" class="btn btn-info">Update</a>
                                        <a href="javascript:" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$tag->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                        <form action="{{ route('admin::tags::destroy', [$tag]) }}" method="post" class="hidden" id="delete-item-{{ $tag->id }}">
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
                            {{$tags->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
