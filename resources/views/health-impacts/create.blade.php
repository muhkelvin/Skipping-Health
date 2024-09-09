@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Health Impact</h1>
        <form method="POST" action="{{ route('health-impacts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="jump_count" class="form-label">Number of Jumps</label>
                <input type="number" class="form-control" id="jump_count" name="jump_count" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
