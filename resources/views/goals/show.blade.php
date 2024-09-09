@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Fitness Goal Details') }}</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="daily_target" class="form-label">{{ __('Daily Target') }}</label>
                            <input id="daily_target" type="number" class="form-control" name="daily_target" value="{{ $goal->daily_target }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="weekly_target" class="form-label">{{ __('Weekly Target') }}</label>
                            <input id="weekly_target" type="number" class="form-control" name="weekly_target" value="{{ $goal->weekly_target }}" disabled>
                        </div>

                        <a href="{{ route('goals.index') }}" class="btn btn-primary">{{ __('Back to Fitness Goals') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
