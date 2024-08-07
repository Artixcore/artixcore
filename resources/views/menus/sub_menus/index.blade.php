@extends('admin.master.master')


@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">{{ $menu->menu }}</h2>
                    <a href="{{ route('sub_menus.create') }}" class="btn btn-outline-primary" style="float: right;">Create Sub-Menu</a>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>SubMenu</th>
                                <th>Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subMenus as $subMenu)
                                <tr>
                                    <td>{{ $subMenu->id }}</td>
                                    <td>{{ $subMenu->submenu }}</td>
                                    <td>{{ $subMenu->submenu_link }}</td>
                                    <td>
                                        <a href="{{ route('sub_menus.show', $subMenu->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('sub_menus.edit', $subMenu->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('sub_menus.destroy', $subMenu->id) }}" method="POST" class="delete-form"
                                            style="display:inline-block;">
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
    </main>
@endsection
