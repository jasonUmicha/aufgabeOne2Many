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
                        Founded: {{ $fahrer->vorname }}
                    </span>



                <p class="inline italic text-gray-700 py-3">
                    Fahrten:
                </p>

                <table>
{{--                    @forelse ($fahrer->fahrten as $fahrt)--}}
                    <li class="inline italic text-gray-600 px-1 py-6">
{{--                                {{ $fahrt->tag }}--}}
                            </li>

{{--                    @empty--}}
                        <p>
                            keine Fahrt eingetragen
                        </p>
{{--                    @endforelse--}}
                </table>
            </div>
        </div>
    </div>

@endsection
