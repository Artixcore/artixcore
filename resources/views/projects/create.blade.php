@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Create Clients</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">



                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
    </main>
@endsection
