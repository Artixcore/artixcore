@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header">Edit Service</div>
                        <div class="card-body">
                            <form action="{{ route('services.update', $service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="service_name" class="form-label">Service Name</label>
                                    <input type="text" class="form-control" id="service_name" name="service_name"
                                        value="{{ $service->service_name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="service_short_desc" class="form-label">Short Description</label>
                                    <textarea type="text" class="form-control" id="service_short_desc" name="service_short_desc"
                                        value="{{ $service->service_short_desc }}">{{ $service->service_short_desc }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="service_icon" class="form-label">Service Icon</label>
                                    <input type="text" class="form-control" id="service_icon" name="service_icon"
                                        value="{{ $service->service_icon }}">
                                </div>
                                <div class="mb-3">
                                    <label for="service_image" class="form-label">Service Image</label>
                                    <input type="file" class="form-control" id="service_image" name="service_image"
                                        value="{{ $service->service_image }}">
                                </div>
                                <div class="mb-3">
                                    <label for="article_number" class="form-label">Article Number</label>
                                    <input type="text" class="form-control" id="article_number" name="article_number"
                                        value="{{ $service->article_number }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        @if ($service->service_image)
                            <img src="{{ asset('storage/' . $service->service_image) }}" alt="{{ $service->service_name }}"
                                style="width: 100%;">
                        @endif
                    </div>

                </div>
            </div>
        </div>

    </main>
@endsection
