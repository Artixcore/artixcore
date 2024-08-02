@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">

                        <h1>Create Service</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="service_name" class="form-label">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="service_short_desc" class="form-label">Short Description</label>
                                <textarea type="text" class="form-control" id="service_short_desc" name="service_short_desc"
                                    required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="service_icon" class="form-label">Service Icon</label>
                                <input type="text" class="form-control" id="service_icon" name="service_icon">
                            </div>
                            <div class="mb-3">
                                <label for="service_image" class="form-label">Service Image</label>
                                <input type="file" class="form-control" id="service_image" name="service_image" required>
                            </div>
                            <div class="mb-3">
                                <label for="article_number" class="form-label">Article for Service</label>
                                <input type="text" class="form-control" id="article_number" name="article_number"
                                    >
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
