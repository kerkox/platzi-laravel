@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Reports</div>
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <h1>Report: {{ $report->title }}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-3">
                        <a class="btn btn-secondary" href="/expense_reports">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3">
                        <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/confirmSendMail">Send Email</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-4">
                        <h3>Details</h3>
                        <table class="table">
                            @foreach ($report->expenses as $expense)
                            <tr>
                                <td>{{ $expense->description }}</td>
                                <td>{{ $expense->created_at }}</td>
                                <td>{{ $expense->amount }}</td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">New expense</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
