@extends('layouts.default')
@section('title', 'Internal Server Error - ' . app_name())

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-1">500</h1>
                    <h2 class="display-4">Internal Server Error</h2>
                    <p class="lead">The server encountered an internal error or misconfiguration and was unable to complete your request.</p>
                    <a href="/" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
