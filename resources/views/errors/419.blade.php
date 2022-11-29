@extends('layouts.default')
@section('title', 'Page Expired - ' . app_name())

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-1">419</h1>
                    <h2 class="display-4">Page Expired</h2>
                    <p class="lead">The page has expired due to inactivity.</p>
                    <a href="/" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
