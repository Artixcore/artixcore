@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h3>Article Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Article Title -->
                                <div class="col-md-12 mb-3">
                                    <h4>{{ $article->title }}</h4>
                                </div>

                                <!-- Primary Image -->
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <strong>Primary Image:</strong>
                                        @if ($article->primaryImage)
                                            <img src="{{ asset('storage/' . $article->primaryImage->image_file) }}"
                                                alt="Primary Image" width="200">
                                        @else
                                            <span style="color: red;">No image</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Article Image -->
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <strong>Article Image:</strong>
                                        @if ($article->image)
                                            <img src="{{ asset('storage/' . $article->image->image_file) }}"
                                                alt="Article Image" width="200">
                                        @else
                                            <span style="color: red;">No image</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Article Video -->
                                <div class="col-md-4 mb-3">
                                    <div>
                                        <strong>Article Video:</strong>
                                        <br>
                                        @if ($article->video)
                                            <video style="width: 100%;" controls>
                                                <source src="{{ asset('storage/' . $article->video->video_file) }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @else
                                            <span style="color: red;">No video</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Article Details -->
                                <div class="row">

                                    <div class="col-md-6">
                                        <strong>Subject:</strong>
                                        <br>
                                        {{ $article->subject }}
                                    </div>

                                    <div class="col-md-6">
                                        <strong>Type:</strong>
                                        <br>
                                        {{ $article->article_type }}
                                    </div>
                                    <div class="col-md-12 py-3">

                                        <strong>Short Description:</strong>
                                        <br>
                                        {{ $article->short_desc }}

                                    </div>
                                </div>

                                <!-- Back Button -->
                                <div class="col-md-12">
                                    <a href="{{ route('admin.article-list') }}" class="btn btn-outline-secondary">Back to
                                        List</a>
                                </div>
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
