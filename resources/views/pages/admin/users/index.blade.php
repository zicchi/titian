@extends('layouts.main')
@section('title')
    User
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
            @if(auth()->user()->role == 'superadmin' || auth()->user()->role == 'owner')
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin::users::create')}}" class="btn btn-primary">Tambah User +</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Created At</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            @if($user->role != 'superadmin')
                                                <a href="{{route('admin::users::edit',[$user])}}" class="btn btn-info">Update</a>
                                                <a href="javascript:;" onclick="if(confirm('Anda yakin ingin menghapus item ini?')){$('#delete-item-{{$user->id}}').submit()};" class="btn btn-danger">Hapus</a>
                                                <form action="{{ route('admin::users::destroy', [$user]) }}" method="post" class="hidden" id="delete-item-{{ $user->id }}">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                {{$users->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            @endif



        </div>
    </section>
@endsection
