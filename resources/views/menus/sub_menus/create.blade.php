@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h1>Create Meta</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('sub_menus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="menu_id" class="form-label">Menu</label>
                            <select class="form-control" id="menu_id" name="menu_id" required>
                                @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}">{{ $menu->menu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="submenu" class="form-label">SubMenu</label>
                            <input type="text" class="form-control" id="submenu" name="submenu" required>
                        </div>
                        <div class="mb-3">
                            <label for="submenu_link" class="form-label">SubMenu Link</label>
                            <input type="text" class="form-control" id="submenu_link" name="submenu_link" required>
                        </div>
                        <div class="mb-3">
                            <label for="submenu_image" class="form-label">SubMenu Image</label>
                            <input type="file" class="form-control" id="submenu_image" name="submenu_image" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create SubMenu</button>
                    </form>
                </div>

            </div>

        </div>
    </main>
@endsection
