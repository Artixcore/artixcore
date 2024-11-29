@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1 style="float: left;">Create Clients</h1>
                        <a href="#"" class="btn btn-outline-primary" style="float: right;"data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Company</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="mb-3">
                                    <label for="client_name" class="form-label">Client Name</label>
                                    <input type="text" class="form-control" id="client_name" name="client_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="client_designation" class="form-label">Client Designation</label>
                                    <input type="text" class="form-control" id="client_designation"
                                        name="client_designation" required>
                                </div>
                                <div class="mb-3">
                                    <label for="client_email" class="form-label">Client Email</label>
                                    <input type="email" class="form-control" id="client_email" name="client_email"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="client_phone" class="form-label">Client Phone</label>
                                    <input type="text" class="form-control" id="client_phone" name="client_phone"
                                        required>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="client_company" class="form-label">Client Company</label>
                                    <input type="text" class="form-control" id="client_company" name="client_company"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="client_country" class="form-label">Client Country</label>
                                    <select class="form-control" id="country" name="client_country">
                                        <option value="">Select Country</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="client_state" class="form-label">Client State</label>
                                    <select class="form-control" id="state" name="client_state" disabled>
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="client_city" class="form-label">Client City</label>
                                    <select class="form-control" id="city" name="client_city" disabled>
                                        <option value="">Select City</option>
                                    </select>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="client_accuire_from" class="form-label">Client Acquired From</label>
                                    <input type="text" class="form-control" id="client_accuire_from"
                                        name="client_accuire_from" required>
                                </div>
                                <div class="mb-3">
                                    <label for="client_image" class="form-label">Client Image</label>
                                    <input type="file" class="form-control" id="client_image" name="client_image">
                                </div>
                                <div class="mb-3">
                                    <label for="client_geoip" class="form-label">Client GeoIP</label>
                                    <input type="text" class="form-control" id="client_geoip" name="client_geoip"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-md-7">

                                <div class="mb-3">
                                    <label for="client_desc" class="form-label">Client Description</label>
                                    <textarea class="form-control" id="client_desc" name="client_desc"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary" style="float: right;">Create</button>
                            </div>

                        </div>
            </form>
        </div>
        </div>
        </div>
    </main>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3">
                    <p class="mb-0">Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes,
                        user
                        notifications, or completely custom content.</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
