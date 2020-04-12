@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Reports</div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col">
                        <h1>Reports</h1>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col">
                        <a class="btn btn-primary" href="/expense_reports/create">Create a new report</a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="mt-4 col align-self-center">
                        <table class="table">
                            @foreach($expenseReports as $expenseReport)
                            <tr>
                                <td><a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title}}</a></td>
                                <td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Edit</a></td>
                                <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
