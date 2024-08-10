@extends('layout.main')
@section('title', 'create-categories')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Create Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route("store.category") }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" placeholder="Food,Entertainment">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
