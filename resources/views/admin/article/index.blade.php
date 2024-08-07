@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Article List</h2>
                    <a href="{{ route('admin.article-new') }}" class="btn btn-outline-success" style="float: right;">New
                        Article</a>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Page</th>
                                <th>Article Image</th>
                                <th>Article Video</th>
                                <th>Author</th>
                                <th>Subject</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $content)
                                <tr>
                                    <td>{{ $content->id }}</td>
                                    <td>{{ $content->title }}</td>
                                    <td>{{ $content->page_article }}</td>
                                    <td>
                                        @if ($content->article_image)
                                            <span style="color: green;">1</span>
                                        @else
                                            <span style="color: red;">0</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($content->article_video)
                                            <span style="color: green;">1</span>
                                        @else
                                            <span style="color: red;">0</span>
                                        @endif
                                    </td>
                                    <td>{{ $content->author->name }}</td>
                                    <td>{{ $content->subject }}</td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('articles.show', $content->id) }}"
                                                class="btn btn-outline-success"><i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('articledestroy', $content->id) }}" class="delete-form"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
