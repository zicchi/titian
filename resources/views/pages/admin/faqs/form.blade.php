@extends('layouts.main')
@section('title')
    @if($faq->id)
        Edit {{$faq->name}}
    @else
        Tambah Faq
    @endif
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{route('admin::dashboard')}}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{route('admin::faqs::index')}}">Faq</a></div>
                @if($faq->id)
                    <div class="breadcrumb-item">Edit {{$faq->name}}</div>
                @else
                    <div class="breadcrumb-item">Tambah Faq</div>
                @endif
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <form method="post" action="{{$faq->id ? route('admin::faqs::update',[$faq]) : route('admin::faqs::store') }}">
                    @csrf
                    @if($faq->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" class="form-control" name="question" required="" value="{{$faq->question}}">
                        </div>
                        <div class="form-group">
                            <label>Answer</label>
                            <input type="text" class="form-control" name="answer" required="" value="{{$faq->answer}}">
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
