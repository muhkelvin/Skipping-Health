@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Skipping Record Details') }}</div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="date" class="form-label">{{ __('Date') }}</label>
                            <input id="date" type="date" class="form-control" name="date" value="{{ $record->date }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="jumps" class="form-label">{{ __('Jumps') }}</label>
                            <input id="jumps" type="number" class="form-control" name="jumps" value="{{ $record->jumps }}" disabled>
                        </div>

                        <a href="{{ route('skipping.index') }}" class="btn btn-primary">{{ __('Back to Records') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
