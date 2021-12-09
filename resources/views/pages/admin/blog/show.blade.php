@extends('layouts.main')
@section('title')
{{$blog->title}}
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::blogs::index')}}">Blog</a></div>
                <div class="breadcrumb-item">@yield('title')</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <dt>ID Blog</dt>
                            <dd>#{{$blog->id}}</dd>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            @if($blog->imageUrl)
                                <img src="{{ asset($blog->imageUrl) }}" alt="" class="img-thumbnail" width="400px">
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
