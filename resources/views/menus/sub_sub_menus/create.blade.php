@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Create Sub Sub Menu</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sub_sub_menus.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="submenu_id" class="form-label">SubMenu</label>
                                <select class="form-control" id="submenu_id" name="submenu_id" required>
                                    @foreach ($subMenus as $subMenu)
                                        <option value="{{ $subMenu->id }}">{{ $subMenu->submenu }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="subsubmenu" class="form-label">SubSubMenu</label>
                                <input type="text" class="form-control" id="subsubmenu" name="subsubmenu" required>
                            </div>
                            <div class="mb-3">
                                <label for="subsubmenu_link" class="form-label">SubSubMenu Link</label>
                                <input type="text" class="form-control" id="subsubmenu_link" name="subsubmenu_link"
                                    required>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="subsubmenu_image" class="form-label">SubSubMenu Image</label>
                                <input type="file" class="form-control" id="subsubmenu_image" name="subsubmenu_image"
                                    required>
                            </div> --}}
                            <button type="submit" class="btn btn-primary">Create SubSubMenu</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
