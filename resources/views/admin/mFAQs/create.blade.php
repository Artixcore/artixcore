@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h2>Create FAQ</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('faqs.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="question" class="form-label">Question</label>
                                    <input type="text" class="form-control" id="question" name="question" required>
                                </div>
                                <div class="mb-3">
                                    <label for="answer" class="form-label">Answer</label>
                                    <textarea class="form-control" id="answer" name="answer" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Save FAQ</button>
                                <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </main>
@endsection
