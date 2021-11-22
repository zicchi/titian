@extends('layouts.main')
@section('title')
Profile
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{$user->name}}</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>
            @if (session('danger'))
                <div class="alert alert-danger">
                    {{session('danger')}}
                </div>
            @elseif(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{$user->imageUrl != '' ? \Illuminate\Support\Facades\Storage::url($user->imageUrl) : asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Username</div>
                                    <div class="profile-widget-item-value">{{$user->username}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{$user->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$user->role}}</div></div>
                            <div class="row">
                                <div class="col-md-4">Email</div>
                                <div class="col-md-8">{{$user->email}}</div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="font-weight-bold mb-2">
                                <a href="{{route('admin::profile::edit-password')}}" class="btn btn-primary">Ubah Password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" action="{{route('admin::profile::update')}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}" required="">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5 col-12">
                                        <label>Username</label>
                                        <input type="tel" name="username" class="form-control" value="{{$user->username}}">
                                    </div>
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Foto Profil</label>
                                    @if($user->imageUrl)
                                        <div class="my-2">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($user->imageUrl) }}"
                                                 alt="Gambar {{ $user->name }}" class="image-preview">
                                        </div>
                                    @endif
                                    <input type="file" name="image" dusk="image" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" type="submit">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
