@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Service List</h2>
                    <a href="{{ route('services.create') }}" class="btn btn-outline-primary" style="float: right;">Create
                        Service</a>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Name</th>
                                {{-- <th>Short Description</th> --}}
                                <th>Icon</th>
                                <th>Image</th>
                                <th>Article Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->service_name }}</td>
                                    {{-- <td>{{ $service->service_short_desc-> }}</td> --}}
                                    <td>{{ $service->service_icon }}</td>
                                    <td><img src="{{ asset('storage/' . $service->service_image) }}"
                                            alt="{{ $service->service_name }}" style="width: 50px;"></td>
                                    <td>{{ $service->article_number }}</td>
                                    <td>
                                        <a href="{{ route('services.edit', $service->id) }}"
                                            class="btn btn-outline-warning"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                            class="delete-form" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
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
