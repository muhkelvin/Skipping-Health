@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">{{ __('Login') }}</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                        <input id="password" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" type="checkbox" class="h-4 w-4 text-blue-600 border-gray-300 rounded" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="ml-2 block text-sm text-gray-900">{{ __('Remember Me') }}</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition duration-300">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
