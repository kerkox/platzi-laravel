@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Reports</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>New Reports</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary" href="/expense_reports">Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-3">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/expense_reports" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="type a title" value="{{ old('title') }}">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
