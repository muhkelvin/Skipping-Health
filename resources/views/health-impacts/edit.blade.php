@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Health Impact</h1>
        <form method="POST" action="{{ route('health-impacts.update', $healthImpact->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="jump_count" class="form-label">Number of Jumps</label>
                <input type="number" class="form-control" id="jump_count" name="jump_count" value="{{ $healthImpact->jump_count }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
