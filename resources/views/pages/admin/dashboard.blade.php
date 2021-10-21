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
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
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
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
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
        </div>
    </section>
@endsection
