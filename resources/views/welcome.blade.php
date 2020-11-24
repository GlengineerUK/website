@extends('layouts.master')

@section('scripts')
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection

@section('content')
    <div class="flex flex-col w-full">
        <section id="front-page" class="bg-gray-200 w-full">
            <div class="flex items-center py-16 border-t border-b border-gray-300">
                <div class="flex-1"></div>
                <div id="left" class="flex-none">
                    <img src="{{asset('/images/profile/profile2.jpg')}}" alt="Picture of Glen's face"
                         class="rounded rounded-full h-32 w-32 ml-2 sm:h-48 sm:w-48 object-cover bg-gray-100 p-2 border border-gray-300"
                    >
                </div>
                <div id="right" class="ml-8">
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
        </section>
        {{--        <h1 class="mt-32 m-auto text-5xl font-semibold">Under construction</h1>--}}
        <div class="flex flex-col mb-16 items-center"
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
            <div class="mx-1 sm:mx-0 sm:w-3/4 xl:w-1/2 " x-show="openTab === 1">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet mi a sapien ullamcorper consectetur eu sed odio. Fusce ac semper sem. Curabitur porta, ligula nec tristique semper, ante lectus ultricies dui, ut venenatis neque quam euismod nunc. Nullam eget diam vitae justo dictum aliquam. Donec sollicitudin orci neque, a gravida est sodales at. Proin at hendrerit urna. Donec finibus metus felis. Vivamus urna nibh, euismod non leo id, cursus blandit ipsum. Vestibulum dignissim metus id mauris varius consectetur.</p>

                <p class="">Nullam eget vestibulum metus, quis pulvinar sapien. Sed hendrerit consectetur neque, et pharetra tellus facilisis ac. Aenean interdum efficitur mattis. Mauris pharetra quam sed vestibulum feugiat. Mauris et felis ac velit lobortis ullamcorper eu in arcu. Sed at felis nunc. Proin eget dignissim risus. Aenean aliquam et magna ac aliquet. Etiam viverra tempus pharetra. In in auctor lorem. Maecenas non mauris eros. Fusce facilisis nisi a sagittis tincidunt. Nunc vestibulum molestie mi, at scelerisque quam egestas ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu sem quis quam accumsan mattis at quis lectus.</p>
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
