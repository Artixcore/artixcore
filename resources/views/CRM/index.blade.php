@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Client List</h2>
                    <a href="#" class="btn btn-outline-primary" style="float: right;"data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Company</a>
                    <a href="{{ route('clients.create') }}" class="btn btn-outline-primary" style="float: right;">Create Client</a>
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
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
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


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user
                        notifications, or completely custom content.</p>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-outline-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
