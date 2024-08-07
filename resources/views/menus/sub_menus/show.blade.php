@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h1>{{ $subMenu->submenu }}</h1>
                        <a href="{{ route('sub_sub_menus.create') }}" class="btn btn-outline-primary mb-3">Create
                            SubSubMenu</a>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SubSubMenu</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($subSubMenus as $subSubMenu)
                                    <tr>
                                        <td>{{ $subSubMenu->id }}</td>
                                        <td>{{ $subSubMenu->subsubmenu }}</td>
                                        <td>{{ $subSubMenu->subsubmenu_link }}</td>
                                        <td>
                                            <a href="{{ route('sub_sub_menus.show', $subSubMenu->id) }}"
                                                class="btn btn-info">View</a>
                                            <a href="{{ route('sub_sub_menus.edit', $subSubMenu->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('sub_sub_menus.destroy', $subSubMenu->id) }}"
                                                method="POST" class="delete-form" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
