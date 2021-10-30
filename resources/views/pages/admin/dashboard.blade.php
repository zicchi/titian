@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="row">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Admin</h4>
                                </div>
                                <div class="card-body">
                                    {{$users}}
                                </div>
                            </div>
                        </div>
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-chair"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Produk</h4>
                                </div>
                                <div class="card-body">
                                    {{$products}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <h4>{{$blogCount}}</h4>
                            <div class="card-description">Artikel</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                @foreach($blogs as $blog)
                                    <a href="#" class="ticket-item">
                                        <div class="ticket-title">
                                            <h4>{{$blog->title}}</h4>
                                        </div>
                                        <div class="ticket-info">
                                            <div>{{\Illuminate\Support\Str::limit($blog->description,60)}}</div>

                                        </div>
                                    </a>
                                @endforeach
                                <a href="{{route('admin::blogs::index')}}" class="ticket-item ticket-more">
                                    View All <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">



        </div>
    </section>
@endsection
