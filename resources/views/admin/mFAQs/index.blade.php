@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">FAQ List</h2>

                    <a style="float: right;" href="{{ route('faqs.create') }}" class="btn btn-outline-success">Create FAQ</a>
                </div>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($mFAQs->isEmpty())
                    <div class="alert alert-info">No FAQ available.</div>
                @else
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table" style="width:100%">


                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mFAQs as $faq)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $faq->question }}</td>
                                        <td>{{ Str::limit($faq->answer, 50) }}</td>
                                        <td>
                                            <a href="{{ route('faqs.edit', $faq->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Delete this FAQ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                @endif
            </div>
        </div>
        </div>
    </main>
@endsection
