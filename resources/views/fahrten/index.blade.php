@extends('layout.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Fahrten
            </h1>
        </div>
        <div class="pt-10">
            <div  class="pt-10 mb-10 sm:text-left">
                <a
                    href="/fahrten/create"{{--{{/$fahrer->id}}"--}}
                class="border-b-2 pb-2 border-dotted italic text-green-500">
                    Neue Fahrt zuordnen &rarr;
                </a>
            </div>
        </div>
    <table class="m-auto">
        <thead >
        <tr class="inline italic text-gray-600 px-1 py-6">
            <th class="px-6">Nr.</th>
            <th class="px-6">Fahrer Nachname</th>
            <th class="px-6">Km</th>
            <th class="px-6">Von</th>
            <th class="px-6">Nach</th>
            <th class="px-6">Abfahrt</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($alleFahrten as $fahrt)
            <tr class="inline italic text-gray-600 px-1 py-6">
                <td class="px-6">{{ $fahrt->id }}</td>
                <td class="px-6">{{App\Models\Fahrer::find($fahrt->fahrer_id)->nachname }}</td>
                <td class="px-6">{{ $fahrt->km }}</td>
                <td class="px-6">{{ $fahrt->von }}</td>
                <td class="px-6">{{ $fahrt->nach }}</td>
                <td class="px-6">{{ $fahrt->startTagZeit }}</td>
                <td class="px-6">
                    <a
                        class="border-b-2 pb-2 border-dotted italic text-blue-500"
                        href="/fahrten/{{$fahrt->id}}/edit">
                        Edit &rarr;
                    </a>
                </td>
                <td class="px-6">
                    <form action="/fahrten/{{$fahrt->id}} " class="pt-3" method="POST">
                        @csrf
                        @method('delete')
                        <button
                            type="submit"
                            class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete &rarr;
                        </button>
                    </form>
                </td>
            </tr>

        @empty
            <p>
                keine Fahrt eingetragen
            </p>
        @endforelse
        </tbody>
    </table>

@endsection
