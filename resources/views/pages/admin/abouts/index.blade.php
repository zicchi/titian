@extends('layouts.main')
@section('title')
    Abouts
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
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Header Subtitle</th>
                                <th>Judul</th>
                                <th>Sub Judul</th>
                                <th>Description</th>
                                <th>Header Foto</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{$about->id}}</td>
                                    <td>{{$about->header_subtitle}}</td>
                                    <td>{{$about->judul}}</td>
                                    <td>{{$about->subjudul}}</td>
                                    <td>{{$about->description}}</td>
                                    <td>
                                            @if($about->foto_header)
                                                <img src="{{ asset($about->foto_header) }}" alt="{{ $about->header_subtitle }}" class="img-thumbnail" width="400px">
                                            @else
                                                <dd>Gambar tidak tersedia</dd>
                                            @endif

                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin::abouts::edit',[$about])}}" class="btn btn-success">Update</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            {{$abouts->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
