@extends('admin.master.master')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h2 style="float: left;">Projects List</h2>
                    <a href="{{ route('projects.create') }}" class="btn btn-outline-primary" style="float: right;">Create
                        Projects</a>
                </div>
                <div class="card-body">
                    <table id="datatables-reponsive" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Project Name</th>
                                <th>Project Type</th>
                                <th>Project Start</th>
                                <th>Project End</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->number }}</td>
                                    <td>{{ $project->project_name }}</td>
                                    <td>{{ $project->project_type }}</td>
                                    <td>{{ $project->project_start }}</td>
                                    <td>{{ $project->project_end }}</td>
                                    <td>
                                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('projects.edit', $project->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                            style="display:inline-block;" class="delete-form">
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
