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
                    <p class="text-xl mt-2">Software Developer</p>
                    <a class="text-gray-600 mt-2" href="https://www.instituteforapprenticeships.org/apprenticeship-standards/software-developer">Software Developer Apprenticeship Level 4 with distinction</a>
                    <div class="-ml-1 mt-2 flex flex-wrap w-5/6">
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

            {{--        About me--}}
            <div class="mx-1 sm:mx-0 sm:w-3/4 xl:w-1/2 text-lg " x-show="openTab === 1">
                <p>Hello,</p>
                <p class="mt-2">I'm Glen, a software developer based in England with a background in training.</p>
                <p class="mt-2">I have two years’ professional experience, during which, I have confidently operated at all stages of the software development life cycle:</p>
                <ul class="list-disc ml-8 mt-2">
                    <li>Assisting with project and feature feasibility studies</li>
                    <li>Engaging with stakeholders to elicit requirements</li>
                    <li>Designing models using UML</li>
                    <li>Writing clean, maintainable code using paradigms such as MVC</li>
                    <li>Creating comprehensive testing suites that include unit, integration and feature tests</li>
                    <li>Configuring development resources, including setting up Linux web servers</li>
                    <li>Supporting users via incident management tickets, change requests and staff training & documentation</li>
                </ul>
                <p class="mt-2">Recently, I achieved a <span class="italic font-semibold">pass with distinction</span> on my Software Development Level 4 apprenticeship. I completed two significant full-stack projects, from planning through to maintenance. The first, a purchase order system to manage the companies purchase orders and improve visibility of spending; the second, a configuration management tool to catalogue and improve the visibility of our retail stores' information.</p>
                <p class="mt-2">I really enjoy learning new technologies and better ways to do things. Earlier this year, I containerised our Laravel development environment using docker and wrote the documentation required for it become the standard within our department.</p>
                <p class="mt-2">A day rarely goes by where I don’t spend at least an hour working on my professional development. Lately, I am progressing through the Web Development Screencasts at Laracasts as well as an online data science course from MITx at edx.com. I also enjoy watching talks from conferences such as GOTO, Laracon and many more.</p>
                <p class="mt-2">When I am not writing code, you will typically find me working on my computer, messing around with the latest development tools to improve my skillset or playing strategy and simulation games. Unless it’s game night, in which case I’ll be watching my favourite esports team, Fnatic.</p>
                <p class="mt-2">Thanks for taking the time to look around my website. Feel free to look at my qualifications and projects using the tabs above.</p>
            </div>


            {{--        quals--}}
            <div class="mx-1 sm:mx-0 sm:w-3/4 xl:w-1/2" x-show="openTab === 2">
                <h2 class="font-bold">Qualifications</h2>
                <a href="https://www.instituteforapprenticeships.org/apprenticeship-standards/software-developer">Software Developer Apprenticeship Level 4 with distinction</a>
                <h2 class="font-bold">Certifications</h2>
                <a href="{{asset('/images/certs/bcs_dip_sdmeth_l4.pdf')}}">BCS: Level 4 Diploma in Software Development Methodologies (603/0543/5)</a>
                <br>
                <a href="https://www.youracclaim.com/badges/79d1f84a-4a88-4537-92ac-576bdc22b125/public_url">MTA: HTML5 Application Development Fundamentals</a>
                <br>
                <a href="https://courses.edx.org/certificates/b918c3f6710b4c78a320989377ff668b">MITx: Introduction to Computer Science and Programming Using Python (6.00.1x)</a>
                <br>
                <a href="{{asset('/images/certs/acelos_itil_foundation.pdf')}}">Axelos: ITIL® 4 Foundation</a>
            </div>

            <div class="mx-1 sm:mx-0 sm:w-3/4 xl:w-1/2" x-show="openTab === 3">
                <p class="">Consectetur adipiscing elit. Donec sit amet mi a sapien ullamcorper consectetur eu sed odio. Fusce ac semper sem. Curabitur porta, ligula nec tristique semper, ante lectus ultricies dui, ut venenatis neque quam euismod nunc. Nullam eget diam vitae justo dictum aliquam. Donec sollicitudin orci neque, a gravida est sodales at. Proin at hendrerit urna. Donec finibus metus felis. Vivamus urna nibh, euismod non leo id, cursus blandit ipsum. Vestibulum dignissim metus id mauris varius consectetur.</p>

            </div>
        </div>

    </div>
@endsection
