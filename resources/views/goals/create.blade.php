@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Fitness Goal') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('goals.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="daily_target" class="form-label">{{ __('Daily Target') }}</label>
                                <input id="daily_target" type="number" class="form-control @error('daily_target') is-invalid @enderror" name="daily_target" value="{{ old('daily_target') }}" required autofocus>
                                @error('daily_target')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="weekly_target" class="form-label">{{ __('Weekly Target') }}</label>
                                <input id="weekly_target" type="number" class="form-control @error('weekly_target') is-invalid @enderror" name="weekly_target" value="{{ old('weekly_target') }}" required>
                                @error('weekly_target')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Fitness Goal') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
