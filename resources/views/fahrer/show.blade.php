@extends('layout.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $fahrer->nachname }}
            </h1>
        </div>

        <div class="py-10 text-center">
            <div class="m-auto">
                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        Vorname: {{ $fahrer->vorname }}
                    </span>



                <p class="inline italic text-gray-700 font-bold text-5xl py-3">
                    Fahrten
                </p>

                <table class="m-auto">

                        <thead >
                        <tr class="inline italic text-gray-600 px-1 py-6">
                            <th class="px-6">Nr.</th>
                            <th class="px-6">Km</th>
                            <th class="px-6">Von</th>
                            <th class="px-6">Nach</th>
                            <th class="px-6">Abfahrt</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($fahrer->fahrten as $fahrt)
                        <tr class="inline italic text-gray-600 px-1 py-6">
                            <td class="px-6">{{ $fahrt->id }}</td>
                            <td class="px-6">{{ $fahrt->km }}</td>
                            <td class="px-6">{{ $fahrt->von }}</td>
                            <td class="px-6">{{ $fahrt->nach }}</td>
                            <td class="px-6">{{ $fahrt->startTagZeit }}</td>
                        </tr>

                        </tbody>
                    @empty
                        <p>
                            keine Fahrt eingetragen
                        </p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

@endsection
