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
    class="text-sm">
        <div x-show="showMore == true">

            <div class="px-12 py-4 font-gray-800 ">
                <div id="content_{{$i}}" >{!! $project->content !!}</div>
            </div>
            <button class="px-3 py-0.5 bg-teal-400 text-white w-24" @click="showMore = false">Exit</button>
        </div>
        <div x-show="showMore == false"
            class="px-12 py-4 font-gray-800">
            <div class="flex {{ $i % 2 == 0 ? '' : 'flex-row-reverse' }} justify-between items-center">
                <div class=" flex flex-col">
                    <h1 class="text-xl font-semibold">{{$project->title}}</h1>
                    <div id="summary_{{$i}}" >{!! $project->summary !!}</div>
                    <div class="flex flex-wrap my-2">
                        @foreach(explode(', ', $project->tags) as $tag)
                            <span class="border m-1 px-3 py-1 bg-gray-700 text-gray-50 font-bold tracking-wide shadow">{{ $tag }}</span>
                        @endforeach
                    </div>
                    <button class="px-3 py-0.5 bg-teal-400 text-white w-24" @click="showMore = true">Show more</button>
                </div>
                <div class="ml-2 flex-none">
                    <div class="bg-gradient-to-br from-{{$i % 2 == 0 ? 'red' : 'pink'}}-500 to-{{$i % 2 == 0 ? 'green' : 'blue'}}-500 p-0.5">
                        <img src="{{ asset($project->image_url) }}" alt="" class="h-44 w-44 object-cover m-px">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 mx-40 border-b"></div>
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

