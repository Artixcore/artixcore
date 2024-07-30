@extends('admin.master.master')
@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h3>Write New Article</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Article Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Type</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Video</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Short Desc</label>
                                        <textarea name="" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <button type="submit" style="float: right;"
                                            class="btn btn-outline-success">Publish</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header">
                            <h3>Meta Form form</h3>
                        </div>

                        <div class="card-body">
                            <form>

                                <div class="mb-3">

                                    <input type="text" class="form-control" placeholder="Meta Title">
                                </div>

                                <div class="mb-3">

                                    <input type="title" class="form-control" placeholder="Meta Author"
                                        value="{{ Auth::user()->name }}">
                                </div>

                                <div class="mb-3">

                                    <input type="title" class="form-control" placeholder="Meta Keywords (Use ',' example: Post, Tree)">
                                </div>

                                <div class="mb-3">

                                    <textarea class="form-control" placeholder="Meta Description"></textarea>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" style="float: right;"
                                        class="btn btn-outline-primary">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
