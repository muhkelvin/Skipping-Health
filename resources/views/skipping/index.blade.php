@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-green-500 text-white px-6 py-4">
                        <h2 class="text-xl font-semibold">{{ __('Skipping Records') }}</h2>
                    </div>

                    <div class="p-6">
                        @if (session('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif

                        <a href="{{ route('skipping.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                            {{ __('Add New Record') }}
                        </a>

                        <table class="min-w-full table-auto border-collapse">
                            <thead>
                            <tr class="bg-gray-200 text-left">
                                <th class="px-4 py-2">{{ __('Date') }}</th>
                                <th class="px-4 py-2">{{ __('Jumps') }}</th>
                                <th class="px-4 py-2">{{ __('Actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($records as $record)
                                <tr class="border-t">
                                    <td class="px-4 py-2">{{ $record->date }}</td>
                                    <td class="px-4 py-2">{{ $record->jumps }}</td>
                                    <td class="px-4 py-2 flex space-x-2">
                                        <a href="{{ route('skipping.show', $record->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded text-sm">
                                            {{ __('View') }}
                                        </a>
                                        <a href="{{ route('skipping.edit', $record->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-sm">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route('skipping.destroy', $record->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-sm" onclick="return confirm('{{ __('Are you sure?') }}')">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
