@extends('layouts.master')

@section('scripts')
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection

@section('content')
    <div class="flex flex-col w-full">
        <div id="front-page" class="bg-gray-200 w-full">
            <div class="flex flex-col sm:flex-row items-center  py-16 border-t border-b border-gray-300">
                <div class="flex-1"></div>
                <div id="left" class="flex-none">

                    <img src="{{asset('/images/profile/profile2.jpg')}}" alt="Picture of Glen's face"
                         class="rounded rounded-full h-32 w-32 ml-2 sm:h-48 sm:w-48 object-cover bg-gray-100 p-2 border border-gray-300"
                    >
                </div>
                <div id="right" class="ml-8 items-center">
                    <p class="text-4xl font-semibold">Glen Clark</p>
                    <p class="text-xl">Software Developer</p>
                    <div class="mt-1 flex items-center text-gray-700">
                        <img src="{{ asset('images/icons/loc-icon.png') }}" alt="" class="h-4">
                        <p class="text-lg ml-2 ">Lancashire, England</p>
                    </div>
                    <div class="-ml-1 mt-3 flex flex-wrap w-5/6">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML"><span class="bg-gray-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">HTML</span></a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS"><span class="bg-gray-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">CSS</span></a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"><span class="bg-gray-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">JavaScript</span></a>
                        <a href="https://www.php.net/"><span class="bg-gray-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">PHP</span></a>
                        <a href="https://laravel.com/"><span class="bg-yellow-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">Laravel</span></a>
                        <a href="https://laravel-livewire.com/"><span class="bg-yellow-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">Livewire</span></a>
                        <a href="https://vuejs.org/"><span class="bg-yellow-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">Vue.js</span></a>
                        <a href="https://www.docker.com/"><span class="bg-blue-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">Docker</span></a>
                        <a href="https://git-scm.com/"><span class="bg-blue-700 text-gray-100 ml-1 text-sm rounded rounded-lg px-2">Git</span></a>
                    </div>
                </div>
                <div class="flex-1"></div>
            </div>
        </div>
        {{--        <h1 class="mt-32 m-auto text-5xl font-semibold">Under construction</h1>--}}
        <div class="flex flex-col  mb-16 items-center"
            x-data="{
            openTab: 1,
            activeClasses: 'underline cursor-default',
            inactiveClasses: 'hover:text-blue-700',
            }">
            <div class="flex flex-col sm:inline-flex sm:flex-row my-8 font-semibold text-2xl">
                <a href="#" class="    " @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses">About me</a>
                <a href="#" class="sm:ml-8" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses">Qualifications</a>
                <a href="#" class="sm:ml-8" @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses">Portfolio</a>
            </div>
            <div class="grid" style="grid-template-columns: 1fr min(93vw, 800px) 1fr;">
                <div class="col-start-2">
                    <div x-show="openTab === 1">
                        @include('welcome.about-me')
                    </div>
                    <div x-show="openTab === 2">
                        @include('welcome.qualifications')
                    </div>
                    <div x-show="openTab === 3">
                        @include('welcome.portfolio')
                    </div>
                </div>
            </div>


{{--            <div class="mx-1 sm:mx-0 sm:w-3/4 lg:w-1/2 xl:w-1/3 text-lg " --}}
{{--                --}}

{{--            </div>--}}
{{--            <div class="mx-1 sm:mx-0 sm:w-3/4 xl:w-1/3" x-show="openTab === 2">--}}
{{--                @include('welcome.qualifications')--}}
{{--            </div>--}}
{{--            <div class="mx-1 sm:mx-0 sm:w-3/4 xl:w-1/3" x-show="openTab === 3">--}}
{{--                @include('welcome.portfolio')--}}
{{--            </div>--}}
        </div>

    </div>
@endsection
