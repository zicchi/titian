@extends('layouts.main')
@section('title')
    Ubah Password
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::profile::index')}}">Profile</a></div>
                <div class="breadcrumb-item">Ubah Password</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{route('admin::profile::update-password')}}">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="password" required="">
                        </div>
                        <div class="form-group">
                            <label>New Password (Verification)</label>
                            <input type="password" class="form-control" name="verification" required="">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
