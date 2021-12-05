@extends('layouts.main')
@section('title')
    Contacts
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
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Bio</th>
                                <th>Instagram</th>
                                <th>Facebook</th>
                                <th>Google Maps</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->address}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->bio}}</td>
                                    <td>{{$contact->instagram}}</td>
                                    <td>{{$contact->facebook}}</td>
                                    <td>{{$contact->maps}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('admin::contacts::edit',[$contact])}}" class="btn btn-success">Update</a>
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
                            {{$contacts->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
