@extends('users.layout')

@section('content')
    <div class="container">
        <h2>User Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $users->name }}</h5>
                <h5 class="card-text">Email: {{ $users->email }}</h5>
                <h5 class="card-text">Mobile: {{ $users->mobile }}</h5>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
