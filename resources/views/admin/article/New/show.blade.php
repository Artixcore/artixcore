@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>Article Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Article Title -->
                                <div class="col-md-12">
                                    <h4>{{ $article->title }}</h4>
                                </div>

                                <!-- Primary Image -->
                                <div class="col-md-4">
                                    <div>
                                        <strong>Primary Image:</strong>
                                        <br>
                                        @if ($article->primary_image)
                                            <img src="{{ asset('storage/' . $article->primary_image) }}" alt="Primary Image"
                                                width="200">
                                        @else
                                            <span style="color: red;">No image</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Article Image -->
                                <div class="col-md-4">

                                    <br>
                                    @if ($article->article_image)
                                        <img src="{{ asset('storage/' . $article->article_image) }}" alt="Article Image"
                                            style="width: 100%;">
                                    @else
                                        <span style="color: red;">No Article image</span>
                                    @endif

                                </div>

                                <!-- Article Video -->
                                <div class="col-md-4">
                                    @if ($article->article_video)
                                        <video style="width: 100%;" controls>
                                            <source src="{{ asset('storage/' . $article->article_video) }}"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <span style="color: red;">No video</span>
                                    @endif
                                </div>
                            </div>

                            <!-- Article Details -->
                            <div class="row mb-3">
                                <div class="col-md-8">
                                    <strong>Subject:</strong>
                                    <br>
                                    {{ $article->subject }}
                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('updatepage', $article->id) }}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <select name="page_article" id="page_article" class="form-control">
                                                <option value="hero"
                                                    {{ $article->page_article == 'hero' ? 'selected' : '' }}>Hero
                                                </option>
                                                <option value="service"
                                                    {{ $article->page_article == 'service' ? 'selected' : '' }}>Service
                                                </option>
                                                <option value="products"
                                                    {{ $article->page_article == 'products' ? 'selected' : '' }}>
                                                    Products</option>
                                                <option value="page"
                                                    {{ $article->page_article == 'page' ? 'selected' : '' }}>Page
                                                </option>
                                            </select>
                                            <button type="submit" class="btn btn-outline-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <strong>Short Description:</strong>
                                <br>
                                {{ $article->short_desc }}
                            </div>
                            <div class="py-3"></div>
                            <!-- Back Button -->
                            <div class="col-md-12">
                                <a href="{{ route('admin.article-list') }}" class="btn btn-outline-secondary">Back to
                                    List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header">
                            <h3>Meta Form form</h3>
                        </div>

                        <div class="card-body">
                            <form>

                                <div class="mb-3">

                                    <input type="text" class="form-control" placeholder="Meta Title">
                                </div>

                                <div class="mb-3">

                                    <input type="title" class="form-control" placeholder="Meta Author"
                                        value="{{ Auth::user()->name }}">
                                </div>

                                <div class="mb-3">

                                    <input type="title" class="form-control"
                                        placeholder="Meta Keywords (Use ',' example: Post, Tree)">
                                </div>

                                <div class="mb-3">

                                    <textarea class="form-control" placeholder="Meta Description"></textarea>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" style="float: right;"
                                        class="btn btn-outline-primary">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
