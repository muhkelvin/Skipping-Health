@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Achievement Details') }}</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Title') }}</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $achievement->title }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('Description') }}</label>
                            <textarea id="description" class="form-control" name="description" disabled>{{ $achievement->description }}</textarea>
                        </div>

                        <a href="{{ route('achievements.index') }}" class="btn btn-primary">{{ __('Back to Achievements') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
