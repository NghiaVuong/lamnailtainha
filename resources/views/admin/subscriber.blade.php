@extends('layouts.admin.master')
@section('title', 'Subscriber')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Tên</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcriber as $element)
                                <tr>
                                    <td>{{ $element['id'] }}</td>
                                    <td>{{ $element['email'] }}</td>
                                    <td>{{ $element['name'] }}</td>
                                    <td>{{ $element['subject'] }}</td>
                                    <td>{{ $element['message'] }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
