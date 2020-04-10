@extends('layouts.base')

@section('content')

<div class="row">
    <div class="col">
        <h1>Reports</h1>
        <a href="/expense_reports/create">Create a new report</a>
        <table>
            @foreach($expenseReports as $expenseReport)
            <tr>
                <td>{{ $expenseReport->title}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
