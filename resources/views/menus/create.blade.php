@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Create Menus</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="menu" class="form-label">Menu</label>
                                <input type="text" class="form-control" id="menu" name="menu" required>
                            </div>
                            <div class="mb-3">
                                <label for="menu_link" class="form-label">Menu Link</label>
                                <input type="text" class="form-control" id="menu_link" name="menu_link" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Menu Type</label>
                                <select name="menu_type" class="form-control">
                                    <option selected>Select One</option>
                                    <option value="Header">Header</option>
                                    <option value="Footer">Footer</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="menu_image" class="form-label">Menu Image</label>
                                <input type="file" class="form-control" id="menu_image" name="menu_image" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option selected>Select One</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Create Menu</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
