@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="col-md-4">


                <form action="{{ route('sub_menus.update', $subMenu->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">


                            <div class="mb-3">
                                <label for="menu_id" class="form-label">Menu</label>
                                <select class="form-control" id="menu_id" name="menu_id" required>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}"
                                            {{ $menu->id == $subMenu->menu_id ? 'selected' : '' }}>{{ $menu->menu }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="submenu" class="form-label">SubMenu</label>
                                <input type="text" class="form-control" id="submenu" name="submenu"
                                    value="{{ $subMenu->submenu }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="submenu_link" class="form-label">SubMenu Link</label>
                                <input type="text" class="form-control" id="submenu_link" name="submenu_link"
                                    value="{{ $subMenu->submenu_link }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="submenu_image" class="form-label">SubMenu Image</label>
                                <input type="file" class="form-control" id="submenu_image" name="submenu_image">
                            </div>
                            <button type="submit" class="btn btn-primary">Update SubMenu</button>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </main>
@endsection
