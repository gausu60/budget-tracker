@extends('layout.main')

@section('title', 'budget Tracker App')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Total Income</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h3>{{ $total_income }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Total Expense</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                       <h3>{{ $total_expense }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Total Balance</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                       <h3>{{ $total_balance }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

