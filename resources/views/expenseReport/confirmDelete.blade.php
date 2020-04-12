@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Reports</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>Delete Report {{ $report->id }}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary" href="/expense_reports">Back</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-3">
                        <form action="/expense_reports/{{ $report->id }}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
