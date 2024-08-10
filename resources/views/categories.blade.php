@extends('layout.main')
@section('title','categories')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Categories</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <div class="card mb-4">
                <a href="{{ url("create-categories") }}" class="btn btn-sm btn-primary" >Create New</a>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-top">
                            <div class="datatable-dropdown">
                                <label>
                                    <select class="datatable-selector">
                                        <option value="5">5</option>
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> entries per page
                                </label>
                            </div>
                            <div class="datatable-search">
                                <input class="datatable-input" placeholder="Search..." type="search"
                                    title="Search within table" aria-controls="datatablesSimple">
                            </div>
                        </div>
                        <div class="datatable-container">
                            <table class="datatable-table" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" style="width: 19.30835734870317%;"><a href="#"
                                            class="datatable-sorter">SR No.</a></th>
                                        <th data-sortable="true" style="width: 19.30835734870317%;"><a href="#"
                                                class="datatable-sorter">Categories</a></th>
                                        <th data-sortable="true" style="width: 14.505283381364073%;"><a href="#"
                                                class="datatable-sorter">CreatedAt</a></th>
                                        <th data-sortable="true" style="width: 12.295869356388089%;"><a href="#"
                                                class="datatable-sorter">Action</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr data-index="0">
                                        <td>{{ $category->categories_id }}</td>
                                        <td>{{ $category->categories }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>
                                            <a href="{{ url("edit-categories/".$category->categories_id) }}">Edit</a>
                                            <a href="{{ url("delete-categories/".$category->categories_id) }}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="datatable-bottom">
                            <div class="datatable-info">Showing 1 to 10 of 57 entries</div>
                            <nav class="datatable-pagination">
                                <ul class="datatable-pagination-list">
                                    <li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><a
                                            data-page="1" class="datatable-pagination-list-item-link">‹</a></li>
                                    <li class="datatable-pagination-list-item datatable-active"><a data-page="1"
                                            class="datatable-pagination-list-item-link">1</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="2"
                                            class="datatable-pagination-list-item-link">2</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="3"
                                            class="datatable-pagination-list-item-link">3</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="4"
                                            class="datatable-pagination-list-item-link">4</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="5"
                                            class="datatable-pagination-list-item-link">5</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="6"
                                            class="datatable-pagination-list-item-link">6</a></li>
                                    <li class="datatable-pagination-list-item"><a data-page="2"
                                            class="datatable-pagination-list-item-link">›</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
