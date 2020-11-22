@extends('layouts.master')

@section('content')
    <div class="flex flex-col w-full">
    <section id="front-page" class="bg-gray-200 w-full">
        <div class="flex items-center py-4">
            <div class="flex-1"></div>
            <div id="left">
                <img src="{{asset('/images/profile/profile2.jpg')}}" alt="Picture of Glen's face"
                     class="rounded rounded-full h-48 w-48 object-cover bg-gray-100 p-2 border"
                >
            </div>
            <div id="right" class="ml-8">
                <p class="text-4xl font-semibold">Glen Clark</p>
                <p class="text-xl">Junior Web Developer</p>
            </div>
            <div class="flex-1"></div>
        </div>
    </section>
    <h1 class="mt-32 m-auto text-5xl font-semibold">Under construction</h1>
    </div>
@endsection
