@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-blue-500 text-white px-6 py-4">
                        <h2 class="text-xl font-semibold">{{ __('Profile') }}</h2>
                    </div>

                    <div class="p-6">
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">{{ __('Name') }}</label>
                                <input id="name" type="text" class="w-full px-3 py-2 border rounded @error('name') border-red-500 @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                                @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="age" class="block text-gray-700 font-bold mb-2">{{ __('Age') }}</label>
                                <input id="age" type="number" class="w-full px-3 py-2 border rounded @error('age') border-red-500 @enderror" name="age" value="{{ old('age', $user->age) }}" required>
                                @error('age')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="weight" class="block text-gray-700 font-bold mb-2">{{ __('Weight') }}</label>
                                <input id="weight" type="number" step="0.1" class="w-full px-3 py-2 border rounded @error('weight') border-red-500 @enderror" name="weight" value="{{ old('weight', $user->weight) }}" required>
                                @error('weight')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="height" class="block text-gray-700 font-bold mb-2">{{ __('Height') }}</label>
                                <input id="height" type="number" step="0.1" class="w-full px-3 py-2 border rounded @error('height') border-red-500 @enderror" name="height" value="{{ old('height', $user->height) }}" required>
                                @error('height')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
