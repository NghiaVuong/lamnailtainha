@extends('layouts.default')
@section('title', 'Page Not Found - ' . app_name())

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-1">404</h1>
                    <h2 class="display-4">Page Not Found</h2>
                    <p class="lead">The page you are looking for might have been removed, had its name changed, or is
                        temporarily unavailable.</p>
                    <a href="/" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
