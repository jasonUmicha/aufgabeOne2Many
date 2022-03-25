@extends('layout.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create Fahrt
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/fahrten" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <input
                    type="number"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="fahrer_id"
                    placeholder="Fahrer_id...">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="von"
                    placeholder="Von...">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="nach"
                    placeholder="Nach...">
                <input
                    type="datetime-local"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="startTagZeit"
                    placeholder="Datum...">
                <input
                    type="number"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="km"
                    placeholder="Kilometer...">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
