@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h1>Create Meta</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('metas.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Author</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_author">
                                </div>
                                <div class="mb-3">
                                    <label for="meta_desc" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="meta_desc" name="meta_desc"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords">
                                </div>
                                <div class="mb-3">
                                    <label for="scripts" class="form-label">Scripts</label>
                                    <textarea class="form-control" id="scripts" name="scripts"></textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="page" class="form-label">Page</label>
                                    <input type="text" class="form-control" id="page" name="page">
                                </div>
                                <div class="mb-3">
                                    <label for="product" class="form-label">Product</label>
                                    <input type="text" class="form-control" id="product" name="product">
                                </div>
                                <div class="mb-3">
                                    <label for="blog" class="form-label">Blog</label>
                                    <input type="text" class="form-control" id="blog" name="blog">
                                </div>
                                <div class="mb-3">
                                    <label for="article" class="form-label">Article</label>
                                    <input type="text" class="form-control" id="article" name="article">
                                </div>
                                <div class="mb-3">
                                    <label for="case_study" class="form-label">Case Study</label>
                                    <input type="text" class="form-control" id="case_study" name="case_study">
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>

            </div>

        </div>
    </main>
@endsection
