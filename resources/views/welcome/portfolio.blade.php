@section('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        .ql-editor {
            padding:0;
            line-height:inherit;
        }
        .ql-editor p {
            margin-bottom:10px;
        }
        .ql-toolbar {
            display:none;
        }
        .ql-container.ql-snow {
            border:none;
            font-family:inherit;
            font-size:inherit;
        }
    </style>
@endsection

@foreach($projects as $i => $project)
    <div x-data="{
                    showMore: false,
                 }"
         class="text-sm grid grid-cols-1 grid-rows-1" >
        {{--Show full project content--}}
        <div x-show="showMore == true"
             class="font-gray-800 right-0 top-0 col-start-1 col-end-2 row-start-1 row-end-2"
             x-transition:enter="transition ease-in duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
        >
            <h1 class="mb-2 text-xl font-bold">{{$project->title}}</h1>
            <a href="{{$project->link_url}}" class="text-blue-500 hover:text-blue-400">{{$project->link_url}}</a>
            <div class="">
                <div id="content_{{$i}}" >{!! $project->content !!}</div>
            </div>
            <button class="mt-2 px-3 py-0.5 bg-teal-400 text-white w-24" @click="showMore = false">Exit</button>
        </div>
        {{--Show project summary content--}}
        <div x-show="showMore == false"
             class="font-gray-800 col-start-1 col-end-2 row-start-1 row-end-2"
             x-transition:enter="transition ease-in  duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
        >
            <div class="flex {{ $i % 2 == 0 ? 'flex-col sm:flex-row' : 'sm:flex-row-reverse' }} justify-between items-center">
                {{--Content--}}
                <div class=" flex flex-col">
                    <h1 class="mb-2 text-xl font-bold">{{$project->title}}</h1>
                    <a href="{{$project->link_url}}" class="text-blue-500 hover:text-blue-400">{{$project->link_url}}</a>
                    <div id="summary_{{$i}}" >{!! $project->summary !!}</div>
                    <div class="flex flex-wrap my-2">
                        @foreach(explode(', ', $project->tags) as $tag)
                            <span class="border m-1 px-3 py-1 bg-gray-700 text-gray-50 font-bold tracking-wide shadow">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <button class="px-3 py-0.5 bg-teal-400 text-white w-24" @click="showMore = true">Show more</button>
                </div>
                {{--Image--}}
                <div class="{{$i % 2 == 0 ? 'ml-12' : 'mr-12'}} flex-none">
                    <div class="bg-gradient-to-br from-{{$i % 2 == 0 ? 'red' : 'pink'}}-500 to-{{$i % 2 == 0 ? 'green' : 'blue'}}-500 p-0.5">
                        <img src="{{ asset($project->image_url) }}" alt="" class="h-44 w-44 object-cover m-px">
                    </div>
                </div>
            </div>
        </div>
        <div class="my-8 mx-40 border-b"></div>
    </div>
@endforeach

@foreach($projects as $i => $project)
    <script>
        var quill_summary_{{$i}} = new Quill('#summary_{{$i}}', {
            theme: 'snow',
            readOnly: true,
            modules: {
                toolbar: false,
            }
        });
        var quill_content_{{$i}} = new Quill('#content_{{$i}}', {
            theme: 'snow',
            readOnly: true,
            modules: {
                toolbar: false,
            }
        });
    </script>
@endforeach

