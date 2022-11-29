@extends('layouts.admin.master')
@section('title', $title)
@section('content')
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="col-md-12 table-content">
        <form id="add-banner"
            action="{{ !isset($banner) ? route('add-banner.post') : route('edit-banner.post', $banner->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <a class="btn btn-dark btn-block" style="width: 100px;" href="/admin/list-banner">Quay lại</a>
                </div>
                <div class="col-12 col-md-9 col-xl-9">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="mb-1 col-md-9 col-xl-9">

                                    <label class="form-label required mb-1">
                                        <span>Tiêu đề</span>
                                        <span class="text-danger alertSpan">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </label>

                                    <input id="title" name="title" type="text" class="form-control"
                                        placeholder="Tiêu đề"
                                        value="{{ isset($banner) ? $banner->title : old('title') }}" />

                                </div>

                                <div class="mb-1 col-md-3 col-xl-3">
                                    <label class="form-label">Ảnh</label>
                                    <input name="thumbnail" type="file" accept="image/*" class="form-control"
                                        id="thumbnail" />
                                    <input type="hidden" name="thumbnailOld"
                                        value="{{ isset($banner) ? $banner->thumbnail : old('thumbnail') }}" />
                                    <label class="form-label" for="thumbnail"><i
                                            class="imageButton bi bi-upload"></i></label>
                                    <label class="form-label"><i class="clearButton bi bi-x-circle"></i></label>
                                    @if (isset($banner))
                                        <img id="preview" src="{{ asset($banner->thumbnail) }}">
                                    @else
                                        <img id="preview" style="display: none">
                                    @endif
                                    <span class="text-danger alertSpan">
                                        @error('thumbnailOld')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="mb-1 editor">
                                <label class="form-label">
                                    <span>Nội dung</span>
                                    <span class="text-danger alertSpan">
                                        @error('content')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </label>
                                <textarea name="content" id="summernote" class="mb-1" hidden>{{ isset($banner) ? $banner->content : old('content') }}</textarea>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-xl-3">
                    <div class="card">
                        <div class="card-body p-2">
                            <div class="mb-2">
                                <div class="form-group ">
                                    <label class="form-label"><i class="bi bi-tagill"></i>Ưu tiên </label>
                                    <input id="tag" name="tag" type="text" class="form-control"
                                        placeholder="Thứ tự [1,2,3]" value="{{ isset($banner) ? $banner->tag : old('tag') }}" />
                                </div>
                                <span class="text-danger alertSpan">

                                </span>

                            </div>
                            <div class="mb-2">
                                <button class="btn btn-dark btn-block" type="submit">
                                    {{ !isset($banner) ? 'Tạo mới' : ' Cập nhật' }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/banner.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Nhập nội dung ',
                height: 300,
                toolbar: [
                    ['style', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['help']],
                    ['fontsize', ['fontsize']],
                    ['height', ['height']],
                ],
            });
        });
    </script>
@endpush
