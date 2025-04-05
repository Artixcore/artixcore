@extends('admin.master.master')


@section('content')
    <main class="content">
        <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <h2 style="float: left;">Menu List</h2>
                        <a href="{{ route('menus.create') }}" class="btn btn-outline-success" style="float: right;">New
                            Menu</a>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Menu</th>
                                    <th>Menu Type</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                        <td>{{ $menu->id }}</td>
                                        <td>{{ $menu->menu }}</td>
                                        <td>{{ $menu->menu_link }}</td>
                                        <td>{{ $menu->menu_type }}</td>
                                        <td>{{ $menu->status }}</td>
                                        <td>
                                            <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="delete-form"
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
