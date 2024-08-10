@extends('layout.main')
@section('title', 'create-categories')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Edit Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route("update.category") }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="hidden" name="categories_id" value="{{ $category[0]->categories_id }}">
                            <input type="text" class="form-control" id="category" name="categories" value="{{ $category[0]->categories }}" placeholder="Food,Entertainment">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
