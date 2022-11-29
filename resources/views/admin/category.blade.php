@extends('layouts.admin.master')
@section('title', 'Danh mục bài viết')
@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.3/r-2.3.0/rg-1.2.0/sc-2.0.6/sb-1.3.3/sl-1.4.0/datatables.min.css" />
@endpush
@section('content')
    <div class="row">
        <div id="modal-form-overlay" class="position-fixed top-0 bottom-0 start-0 end-0"
            style="z-index: 999; background-color: rgba(83, 83, 83, 0.281); display: none;"></div>
        <div class="col-md-12 table-content">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-12">
                    <div class="col-12 d-inline-flex justify-content-between align-items-center mb-2">
                        <ul class="pagination pagination-primary float-end dataTable-pagination mb-0">
                            {{-- <li class="page-item">{{ $responses->links() }}</li> --}}
                        </ul>
                        <a href="#" class="btn btn-primary" id="button-add">Thêm mới</a>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="dataTable" class="table table-striped display responsive nowrap"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Tiêu đề</th>
                                                <th>Slug</th>
                                                <th>Mô tả</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-xl-4 position-fixed" style="left: 40%; z-index: 1000; display: none;"
                    id="modal-form">
                    <div class="card position-relative">
                        <div id="button-close"
                            class="d-flex align-items-center p-2 bg-danger text-white rounded-3 text-center position-absolute end-0">
                            <i class="bi bi-x"></i>
                        </div>
                        <div class="card-body">
                            <form id="formValidate">
                                <div class="mb-2">
                                    <label class="form-label required">Tiêu đề</label>
                                    <input type="hidden" id="edit_id" disabled>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                                        class="form-control" placeholder="Tiêu đề" />
                                    <span class="text-danger alertSpan nameErr">
                                    </span>
                                </div>
                                <div class="mb-2">
                                    <div class="form-label">Mô tả</div>
                                    <textarea name="description" cols="30" rows="7" value="{{ old('description') }}" id="description"
                                        class="form-control" placeholder="Mô tả ..."></textarea>
                                    <span class="text-danger alertSpan errDes">
                                    </span>
                                </div>
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary button" id="button">Thêm danh
                                        mục</button>
                                    <button type="reset" class="btn btn-danger button" id="button">Làm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade text-left" id="warning" tabindex="-1" aria-labelledby="myModalLabel140" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div id="deleteForm">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title white" id="myModalLabel140">
                            Xác nhận xóa bài viết
                        </h5>
                    </div>
                    <div class="modal-body">

                        <label> Bạn chắc chắn muốn xóa bài viết</label>
                        <p></p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Hủy</span>
                        </button>
                        <input type="hidden" id="id_delete">
                        <button class="btn btn-warning ml-1" id="btnDelete">
                            {{-- <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block" href="">Xác nhận</span> --}}Xác nhận
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Modal -->
@endsection
@push('scripts')
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.3/r-2.3.0/rg-1.2.0/sc-2.0.6/sb-1.3.3/sl-1.4.0/datatables.min.js">
    </script>
    <script src="{{ asset('js/category.js') }}"></script>
    <script>
        // Data Display Code
        var table = $('#dataTable').DataTable({
            ajax: "{{ url('admin/all') }}",
            lengthMenu: [5, 10, 20, 50],
            columns: [{
                    "data": "name"
                },
                {
                    "data": "slug"
                },
                {
                    "data": "description"
                },
                {
                    "data": "status",
                    render: function(data, type, row) {
                        if (row.status == "active") {
                            return `<div>
                                        <button data-id="${row.id}" class="btn btn-sm btn-status btn-success">Active</button>
                                        <a data-id="${row.id}" id="button-edit"><i class="bi bi-pencil-square"></i></a>
                                        <a data-id="${row.id}" class="btn-delete" data-bs-toggle="modal" data-bs-target="#warning" id="delete"><i class="bi bi-trash"></i></a>
                                    </div>`;
                        } else {
                            return `<div>
                                        <button data-id="${row.id}" class="btn btn-sm btn-status btn-warning">Inactive</button>
                                        <a data-id="${row.id}" id="button-edit"><i class="bi bi-pencil-square"></i></a>
                                        <a data-id="${row.id}" class="btn-delete" data-bs-toggle="modal" data-bs-target="#warning" id="delete"><i class="bi bi-trash"></i></a>
                                    </div>`;
                        }
                    }
                },
            ]
        });
    </script>
@endpush
