@extends('layout.main')
@section('title', 'edit-categories')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h3>Edit budget</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route("update.budget") }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" name="budget_id" id="budget_id" value="{{ $expense[0]->budget_id }}">
                            <label for="description" class="form-label">description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Food,Entertainment" value="{{ $expense[0]->description }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" placeholder="amount" value="{{ $expense[0]->amount }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">select category</label>
                            <select name="categories_id" id="categories_id" class="form-control" required>
                                @foreach ($category as $item)
                                <option value="{{ $item->categories_id }}" {{ $expense[0]->categories_id == $item->categories_id ? "selected": "" }}>{{ $item->categories }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">select type</label>
                            <select name="type_id" id="type_id" class="form-control" required>
                                @foreach ($type as $items)
                                    <option value="{{ $items->type_id }}" {{ $expense[0]->type_id == $items->type_id ? "selected": "" }}>{{ $items->type }}</option>
                                @endforeach


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">date</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ $expense[0]->date }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
