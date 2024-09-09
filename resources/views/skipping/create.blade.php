@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New Skipping Record') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('skipping.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="jumps" class="form-label">{{ __('Jumps') }}</label>
                                <input id="jumps" type="number" class="form-control @error('jumps') is-invalid @enderror" name="jumps" value="{{ old('jumps') }}" required autofocus>
                                @error('jumps')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">{{ __('Date') }}</label>
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Record') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
