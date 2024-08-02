@extends('admin.master.master')


@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Meta List</h2>
                    <a href="{{ route('metas.create') }}" class="btn btn-outline-success" style="float: right;">New
                        Meta</a>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Page</th>
                                <th>Product</th>
                                <th>Blog</th>
                                <th>Article</th>
                                <th>Case Study</th>
                                <th>Meta Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($metas as $meta)
                                <tr>
                                    <td>{{ $meta->number }}</td>
                                    <td>{{ $meta->page }}</td>
                                    <td>{{ $meta->product }}</td>
                                    <td>{{ $meta->blog }}</td>
                                    <td>{{ $meta->article }}</td>
                                    <td>{{ $meta->case_study }}</td>
                                    <td>{{ $meta->meta_title }}</td>
                                    <td>
                                        <a href="{{ route('metas.edit', $meta->id) }}"
                                            class="btn btn-outline-warning">Edit</a>
                                        <form action="{{ route('metas.destroy', $meta->id) }}" method="POST" class="delete-form"
                                            style="display:inline;">
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
