@extends('layout.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update Fahrten
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/fahrten/{{$fahrten->id}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="block">
{{--                <input--}}
{{--                    type="number"--}}
{{--                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"--}}
{{--                    name="fahrer_id"--}}
{{--                    value="{{$fahrten->fahrer_id}}">--}}
                <select name="fahrer_id" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                    @foreach($fahrer as $row)
                        <option name="fahrer_id" value="{{$row->id}}" > {{$row->vorname}} {{$row->nachname}}</option>
                    @endforeach
                </select>
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="von"
                    value="{{$fahrten->von}}">

                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="nach"
                    value="{{$fahrten->nach}}">
                <input
                    type="datetime-local"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="startTagZeit"
                    value="{{$fahrten->startTagZeit}}">

                <input
                    type="number"
                    class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                    name="km"
                    value="{{$fahrten->km}}">

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
