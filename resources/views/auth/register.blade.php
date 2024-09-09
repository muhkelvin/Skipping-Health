@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">{{ __('Register') }}</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                        <input id="name" type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                        <input id="password" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="mb-4">
                        <label for="age" class="block text-sm font-medium text-gray-700">{{ __('Age') }}</label>
                        <input id="age" type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('age') border-red-500 @enderror" name="age" value="{{ old('age') }}" required>
                        @error('age')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="weight" class="block text-sm font-medium text-gray-700">{{ __('Weight') }}</label>
                        <input id="weight" type="number" step="0.1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('weight') border-red-500 @enderror" name="weight" value="{{ old('weight') }}" required>
                        @error('weight')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="height" class="block text-sm font-medium text-gray-700">{{ __('Height') }}</label>
                        <input id="height" type="number" step="0.1" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm @error('height') border-red-500 @enderror" name="height" value="{{ old('height') }}" required>
                        @error('height')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 transition duration-300">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
