@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Health Impact Details') }}</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="calories_burned" class="form-label">{{ __('Calories Burned') }}</label>
                            <input id="calories_burned" type="number" class="form-control" name="calories_burned" value="{{ $healthImpact->calories_burned }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="heart_health" class="form-label">{{ __('Heart Health') }}</label>
                            <input id="heart_health" type="text" class="form-control" name="heart_health" value="{{ $healthImpact->heart_health }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="muscle_strength" class="form-label">{{ __('Muscle Strength') }}</label>
                            <input id="muscle_strength" type="text" class="form-control" name="muscle_strength" value="{{ $healthImpact->muscle_strength }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="flexibility" class="form-label">{{ __('Flexibility') }}</label>
                            <input id="flexibility" type="text" class="form-control" name="flexibility" value="{{ $healthImpact->flexibility }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="recommendations" class="form-label">{{ __('Recommendations') }}</label>
                            <textarea id="recommendations" class="form-control" name="recommendations" disabled>{{ $healthImpact->recommendations }}</textarea>
                        </div>

                        <a href="{{ route('health-impacts.index') }}" class="btn btn-primary">{{ __('Back to Health Impacts') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
