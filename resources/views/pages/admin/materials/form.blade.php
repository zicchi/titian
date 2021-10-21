@extends('layouts.main')
@section('title')
    @if($material->id)
        Edit {{$material->name}}
    @else
        Tambah Material
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::materials::index')}}">Material</a></div>
                @if($material->id)
                    <div class="breadcrumb-item">Edit {{$material->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Material</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$material->id ? route('admin::materials::update',[$material]) : route('admin::materials::store') }}">
                    @csrf
                    @if($material->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Material</label>
                            <input type="text" class="form-control" name="name" required="" value="{{$material->name}}">
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
