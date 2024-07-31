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
                                <th>Number</th>
                                <th>Title</th>
                                <th>Content Type</th>
                                <th>Primary Image</th>
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
                                    <td>{{ $content->number }}</td>
                                    <td>{{ $content->title }}</td>
                                    <td>{{ $content->article_type }}</td>
                                    <td>
                                        @if ($content->primary_image)
                                            <img src="{{ asset('storage/' . $content->primary_image) }}" alt="Primary Image"
                                                width="50">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($content->image)
                                            <span style="color: green;">1</span>
                                        @else
                                            <span style="color: red;">0</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($content->video)
                                            <span style="color: green;">1</span>
                                        @else
                                            <span style="color: red;">0</span>
                                        @endif
                                    </td>
                                    <td>{{ $content->author->name }}</td>
                                    <td>{{ $content->subject }}</td>

                                    <td>
                                        <a href="{{route('articles.show',  $content->id)}}" class="btn btn-outline-success">View</a>
                                        {{-- <a href="{{ route('contents.edit', $content->id) }}"
                                            class="btn btn-secondary">Edit</a> --}}
                                        <form action="{{ route('articledestroy', $content->id) }}" class="delete-form"
                                            method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
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
