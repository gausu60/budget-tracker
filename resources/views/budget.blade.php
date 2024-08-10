@extends('layout.main')
@section('title',"budget")
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Budget</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Budget</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{ url("create-budget") }}" class="btn btn-sm btn-primary" >Create New</a>
                </div>
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
                            <table id="datatablesSimple" class="datatable-table">
                                <thead>
                                    <tr>
                                        <th data-sortable="true" style="width: 19.30835734870317%;"><a href="#"
                                                class="datatable-sorter">Sr. No</a></th>
                                        <th data-sortable="true" style="width: 30.25936599423631%;"><a href="#"
                                                class="datatable-sorter">Description</a></th>
                                        <th data-sortable="true" style="width: 14.8895292987512%;"><a href="#"
                                                class="datatable-sorter">Amount</a></th>
                                        <th data-sortable="true" style="width: 8.741594620557157%;"><a href="#"
                                                class="datatable-sorter">Type</a></th>
                                        <th data-sortable="true" style="width: 14.505283381364073%;"><a href="#"
                                                class="datatable-sorter">Date</a></th>
                                        <th data-sortable="true" style="width: 12.295869356388089%;"><a href="#"
                                                class="datatable-sorter">Category</a></th>
                                                <th data-sortable="true" style="width: 12.295869356388089%;"><a href="#"
                                                    class="datatable-sorter">Action</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sr = 1;
                                    @endphp
                                    @foreach($budgets as $budget)
                                    <tr data-index="{{ $sr+1; }}">
                                        <td>{{ $sr++ }}</td>
                                        <td>{{ $budget->description}}</td>
                                        <td>{{ $budget->amount }}</td>
                                        <td>{{ $budget->type }}</td>
                                        <td>{{ $budget->date }}</td>
                                        <td>{{ $budget->categories }}</td>
                                        <td>
                                            <a href="{{ url("edit-budget/".$budget->budget_id) }}">Edit</a>
                                            <a href="{{ url("delete-budget/".$budget->budget_id) }}">Delete</a>
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
