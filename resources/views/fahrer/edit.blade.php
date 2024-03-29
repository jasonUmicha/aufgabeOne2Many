@extends('layout.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update Fahrer
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/fahrer/{{$fahrer->id}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="block">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="vorname"
                    value="{{ $fahrer->vorname }}">

                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="nachname"
                    value="{{ $fahrer->nachname }}">

                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="ort"
                    value="{{ $fahrer->wohnort->ort }}">

                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    pattern="[0-9]{5}"
                    name="plz"
                    value="{{ $fahrer->wohnort->plz }}">


                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
