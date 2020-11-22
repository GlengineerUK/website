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
                    <a class="text-gray-600" href="https://www.instituteforapprenticeships.org/apprenticeship-standards/software-developer">Software Developer Apprenticeship Level 4 with distinction</a>
                    <div class="mt-1">
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML"><span class="bg-gray-700 text-gray-100 text-sm rounded rounded-lg px-2">HTML</span></a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS"><span class="bg-gray-700 text-gray-100 text-sm rounded rounded-lg px-2">CSS</span></a>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"><span class="bg-gray-700 text-gray-100 text-sm rounded rounded-lg px-2">JavaScript</span></a>
                        <a href="https://www.php.net/"><span class="bg-gray-700 text-gray-100 text-sm rounded rounded-lg px-2">PHP</span></a>
                        <a href="https://laravel.com/"><span class="bg-yellow-700 text-gray-100 text-sm rounded rounded-lg px-2">Laravel</span></a>
                        <a href="https://laravel-livewire.com/"><span class="bg-yellow-700 text-gray-100 text-sm rounded rounded-lg px-2">Livewire</span></a>
                        <a href="https://vuejs.org/"><span class="bg-yellow-700 text-gray-100 text-sm rounded rounded-lg px-2">Vue.js</span></a>
                        <a href="https://www.docker.com/"><span class="bg-blue-700 text-gray-100 text-sm rounded rounded-lg px-2">Docker</span></a>
                    </div>

                </div>
                <div class="flex-1"></div>
            </div>
        </section>
        <h1 class="mt-32 m-auto text-5xl font-semibold">Under construction</h1>
        <div class="m-auto">
            <h2 class="font-semibold">Qualifications</h2>
            <a href="https://www.instituteforapprenticeships.org/apprenticeship-standards/software-developer">Software Developer Apprenticeship Level 4 with distinction</a>
            <h2 class="font-semibold">Certifications</h2>
            <a href="https://courses.edx.org/certificates/b918c3f6710b4c78a320989377ff668b">6.00.1x: Introduction to Computer Science and Programming Using Python</a>
            <br>
            <a href="{{asset('/images/certs/bcs_dip_sdmeth_l4.pdf')}}">BCS Level 4 Diploma in Software Development Methodologies (603/0543/5)</a>
            <br>
            <a href="{{asset('/images/certs/acelos_itil_foundation.pdf')}}">ITIL® 4 Foundation</a>
        </div>


    </div>
@endsection
