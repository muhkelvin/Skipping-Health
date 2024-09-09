@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full md:w-2/3 lg:w-1/2">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-blue-500 text-white px-6 py-4">
                        <h2 class="text-xl font-semibold">{{ __('Health Impacts') }}</h2>
                    </div>

                    <div class="p-6">
                        @if (session('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ route('health-impacts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-4 inline-block">{{ __('Add New Health Impact') }}</a>

                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto">
                                <thead>
                                <tr class="bg-gray-200 text-left">
                                    <th class="py-3 px-4">{{ __('Calories Burned') }}</th>
                                    <th class="py-3 px-4">{{ __('Heart Health') }}</th>
                                    <th class="py-3 px-4">{{ __('Muscle Strength') }}</th>
                                    <th class="py-3 px-4">{{ __('Flexibility') }}</th>
                                    <th class="py-3 px-4">{{ __('Actions') }}</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach ($healthImpacts as $healthImpact)
                                    <tr class="border-t">
                                        <td class="py-3 px-4">{{ $healthImpact->calories_burned }}</td>
                                        <td class="py-3 px-4">{{ $healthImpact->heart_health }}</td>
                                        <td class="py-3 px-4">{{ $healthImpact->muscle_strength }}</td>
                                        <td class="py-3 px-4">{{ $healthImpact->flexibility }}</td>
                                        <td class="py-3 px-4 flex space-x-2">
                                            <a href="{{ route('health-impacts.show', $healthImpact->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded">{{ __('View') }}</a>
                                            <a href="{{ route('health-impacts.edit', $healthImpact->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">{{ __('Edit') }}</a>
                                            <form action="{{ route('health-impacts.destroy', $healthImpact->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded" onclick="return confirm('{{ __('Are you sure?') }}')">{{ __('Delete') }}</button>
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
    </div>
@endsection
