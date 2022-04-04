@extends('layout.app')

@section('content')
    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Fahrer
            </h1>
        </div>
        <div class="pt-10">
            <a
                href="fahrer/create"
                class="border-b-2 pb-2 border-dotted italic text-gray-500">
                Neuen Fahrer erstellen &rarr;
            </a>
            <div  class="pt-10 mb-10 sm:text-left">
                <a
                    href="fahrten/"{{--{{/$fahrer->id}}"--}}
                class="border-b-2 pb-2 border-dotted italic text-green-500">
                    Neue Fahrt zuordnen / Fahrtenplanung &rarr;
                </a>
            </div>
        </div>
        <div class="w-5/6 py-10">
            @foreach ($fahrende as $fahrer)
            <div class="m-auto">
                <div class="float-right">
                    <a
                        class="border-b-2 pb-2 border-dotted italic text-green-500"
                        href="fahrer/{{$fahrer->id}}/edit">
                        Edit &rarr;
                    </a>

                    <form action="/fahrer/{{$fahrer->id}} " class="pt-3" method="POST">
                        @csrf
                        @method('delete')
                        <button
                            type="submit"
                            class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete &rarr;
                        </button>
                    </form>
                </div>

                <span
                    class="uppercase text-blue-500 font-bold text-xs italic">
                        Vorname: {{$fahrer->vorname}}
                    </span>

                <h2 class="text-gray-700 text-5xl hover:text-gray-500">
                    <a href="/fahrer/{{$fahrer->id}} ">
                        {{$fahrer->nachname}}
                    </a>
                </h2>

                <span
                    class="uppercase text-blue-500 font-bold text-xs italic">
                        wohnort: {{$fahrer->wohnort->ort}}<br>
                        plz: {{$fahrer->wohnort->plz}}
                    </span>

                <hr class="mt-4 mb-8 darkred" >
            </div>

            @endforeach
        </div>

    </div>


@endsection
