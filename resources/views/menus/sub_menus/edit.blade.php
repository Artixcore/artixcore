@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <form action="{{ route('metas.update', $meta->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <h1>Edit Meta</h1>
                            <div class="card-body">


                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                                        value="{{ $meta->meta_title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_desc" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="meta_desc" name="meta_desc">{{ $meta->meta_desc }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                        value="{{ $meta->meta_keywords }}">
                                </div>
                                <div class="mb-3">
                                    <label for="scripts" class="form-label">Scripts</label>
                                    <textarea class="form-control" id="scripts" name="scripts">{{ $meta->scripts }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="page" class="form-label">Page</label>
                                    <input type="text" class="form-control" id="page" name="page"
                                        value="{{ $meta->page }}">
                                </div>
                                <div class="mb-3">
                                    <label for="product" class="form-label">Product</label>
                                    <input type="text" class="form-control" id="product" name="product"
                                        value="{{ $meta->product }}">
                                </div>
                                <div class="mb-3">
                                    <label for="blog" class="form-label">Blog</label>
                                    <input type="text" class="form-control" id="blog" name="blog"
                                        value="{{ $meta->blog }}">
                                </div>
                                <div class="mb-3">
                                    <label for="article" class="form-label">Article</label>
                                    <input type="text" class="form-control" id="article" name="article"
                                        value="{{ $meta->article }}">
                                </div>
                                <div class="mb-3">
                                    <label for="case_study" class="form-label">Case Study</label>
                                    <input type="text" class="form-control" id="case_study" name="case_study"
                                        value="{{ $meta->case_study }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Meta</button>
            </form>
        </div>
        </div>
        </div>
    </main>
@endsection
