@extends('layouts.admin.master')
@section('title', 'Danh sách bài viết')
@section('content')
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="col-md-12 table-content">
        <div class="row mb-3">
            <div class="col-12">
                <a class="btn w-25" href="{{ route('category.get') }}">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder"></i><span> Danh mục</span>
                    </div>
                </a>
                <a class="btn w-25" href="{{ route('add-blog.get') }}">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-pen-fill"></i>
                        <span>Tạo bài viết</span>
                    </div>
                </a>
            </div>
        </div>
        {{-- <div class="col-12 d-inline-flex justify-content-between align-items-center mb-2">
            <ul class="pagination pagination-primary float-end dataTable-pagination mb-0">
                <li class="page-item">{{ $responses->links() }}</li>
            </ul>
        </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-1">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th> Ảnh </th>
                                    <th> Tiêu đề </th>
                                    <th> Danh mục </th>
                                    <th> Trạng thái </th>
                                    <th> Hành động </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($responses as $element)
                                    <tr id="{{ $element->id }}">
                                        <td class="w-25"> <img src="{{ asset($element->thumbnail) }}" class="h-25 w-25">
                                        </td>
                                        <td><a href="{{ route('edit-blog.post', $element->id) }}">
                                                {{ $element->title }}</a></td>
                                        <td>
                                            @foreach ($element->categories as $category)
                                                @if ($category->status == 'active')
                                                    {{ $category->name }}<br>
                                                    @else
                                                    {{ $category->name }} <span class="text-danger">(ẩn)</span> <br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <form action="{{ route('changeStatus.post') }}" method="post">
                                                @csrf
                                                @if ($element->status == 'active')
                                                    <button type="submit" class="badge bg-success"
                                                        style="border:none;">Active</button>
                                                @else
                                                    <button type="submit" class="badge bg-danger"
                                                        style="border:none;">Inactive</button>
                                                @endif
                                                <input type="hidden" name="id" value="{{ $element->id }}" />
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('edit-blog.post', $element->id) }}"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <a data-bs-toggle="modal" data-val="{{ $element->id }}"
                                                data-title="{{ $element->title }}" data-bs-target="#warning"><i
                                                    class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade text-left" id="warning" tabindex="-1" aria-labelledby="myModalLabel140"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <form id="deleteForm" action="#" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="modal-header bg-warning">
                                        <h5 class="modal-title white" id="myModalLabel140">
                                            Xác nhận xóa bài viết
                                        </h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x">X</i>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <label> Bạn chắc chắn muốn xóa bài viết</label>
                                        <p></p>
                                        <input id="id" type="hidden" value="" />

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Hủy</span>
                                        </button>

                                        <button type="submit" class="btn btn-warning ml-1">
                                            {{-- <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block" href="">Xác nhận</span> --}}Xác nhận
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Modal -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('js/admin.js') }}"></script>

    <script>
        $('#warning').on('show.bs.modal', function(event) {
            var id = $(event.relatedTarget).data('val');
            var title = $(event.relatedTarget).data('title');
            $(this).find(".modal-body input").val(id);
            $(this).find(".modal-body p").text(title);
            $("#deleteForm").attr("action", "{{ route('delete-blog.get', '') }}" + "/" + id);
        });

        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endpush
