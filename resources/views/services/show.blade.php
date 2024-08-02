@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="menu" class="form-label">Menu</label>
                            <input type="text" class="form-control" id="menu" name="menu"
                                value="{{ $menu->menu }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="menu_link" class="form-label">Menu Link</label>
                            <input type="text" class="form-control" id="menu_link" name="menu_link"
                                value="{{ $menu->menu_link }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="menu_image" class="form-label">Menu Image</label>
                            <input type="file" class="form-control" id="menu_image" name="menu_image">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option selected>{{ $menu->status }}</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Menu</button>
                    </form>
                </div>
            </div>
        </div>


    </main>
@endsection
