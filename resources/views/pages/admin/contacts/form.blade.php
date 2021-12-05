@extends('layouts.main')
@section('title')
    @if($contacts->id)
        Edit {{$contacts->name}}
    @else
         Tambah Contacts
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::contacts::index')}}">Gallery</a></div>
                @if($contacts->id)
                    <div class="breadcrumb-item">Edit {{$contacts->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Gallery</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$contacts->id ? route('admin::contacts::update',[$contacts]) : route('admin::contacts::store') }}" enctype="multipart/form-data">
                    @csrf
                    @if($contacts->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" required="" value="{{$contacts->address}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required="" value="{{$contacts->email}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" required="" value="{{$contacts->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Bio</label>
                            <input type="text" class="form-control" name="bio" required="" value="{{$contacts->bio}}">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" name="instagram" required="" value="{{$contacts->instagram}}">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook" required="" value="{{$contacts->facebook}}">
                        </div>
                        <div class="form-group">
                            <label>Google Maps</label>
                            <input type="text" class="form-control" name="maps" required="" value="{{$contacts->maps}}">
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
