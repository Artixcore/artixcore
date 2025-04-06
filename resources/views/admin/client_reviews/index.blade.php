@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Client Reviews</h2>
                    <a style="float: right;" href="{{ route('client-reviews.create') }}" class="btn btn-primary mb-3">+ Add Review</a>
                </div>

                    <div class="card-body">
                        <table id="datatables-reponsive" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Review</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clientReviews as $review)
                                    <tr>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->position }}</td>
                                        <td>{{ Str::limit($review->review, 50) }}</td>
                                        <td>
                                            @if ($review->image)
                                                <img src="{{ asset('storage/' . $review->image) }}" width="60">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('client-reviews.edit', $review->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('client-reviews.destroy', $review->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Delete this review?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Reviews Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

            </div>
        </div>
        </div>
    </main>
@endsection
