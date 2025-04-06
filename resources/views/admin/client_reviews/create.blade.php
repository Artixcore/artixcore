@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h2>Client's Review</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('client-reviews.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $review->name ?? '') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label>Position</label>
                                    <input type="text" name="position" class="form-control"
                                        value="{{ old('position', $review->position ?? '') }}">
                                </div>

                                <div class="mb-3">
                                    <label>Review</label>
                                    <textarea name="review" class="form-control" required>{{ old('review', $review->review ?? '') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if (isset($review) && $review->image)
                                        <img src="{{ asset('storage/' . $review->image) }}" width="80" class="mt-2">
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-success">Save</button>
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </main>
@endsection
