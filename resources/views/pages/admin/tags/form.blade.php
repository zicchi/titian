@extends('layouts.main')
@section('title')
    @if($tag->id)
        Edit {{$tag->name}}
    @else
        Tambah Tag
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::tags::index')}}">tag</a></div>
                @if($tag->id)
                    <div class="breadcrumb-item">Edit {{$tag->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Tag</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$tag->id ? route('admin::tags::update',[$tag]) : route('admin::tags::store') }}">
                    @csrf
                    @if($tag->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Tag</label>
                            <input type="text" class="form-control" name="name" required="" value="{{$tag->name}}">
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
