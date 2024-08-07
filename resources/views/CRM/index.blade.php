@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Client List</h2>
                    <a href="{{ route('clients.create') }}" class="btn btn-outline-primary" style="float: right;">Create
                        Service</a>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table" style="width:100%">
                        <thead>
                            <tr>

                                <th>Client Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>

                                    <td>{{ $client->client_number }}</td>
                                    <td>{{ $client->client_name }}</td>
                                    <td>{{ $client->client_email }}</td>
                                    <td>{{ $client->client_phone }}</td>
                                    <td>{{ $client->client_company }}</td>
                                    <td>{{ $client->client_city }},
                                        {{ $client->client_state }},
                                        {{ $client->client_country }}</td>
                                    <td>
                                        <a href="{{ route('clients.edit', $client->id) }}"
                                            class="btn btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('clients.show', $client->id) }}"
                                            class="btn btn-outline-warning">Edit</a>
                                        <form action="{{ route('clients.destroy', $client->id) }}"
                                            method="POST" class="delete-form" style="display:inline-block;">
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
