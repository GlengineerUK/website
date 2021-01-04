<x-app-layout>

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


        @if($project->exists)
            <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @else
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="flex items-center">
                        @endif
                        <div class="flex flex-col items-center bg-white inline-flex mx-auto p-8 mt-4 rounded-lg shadow-xl"
                             x-data="{
                     title: '{{ old('title', $project->title) }}',
            }">
                            @csrf
                            <div class="flex flex-col items-start w-full max-w-screen-md">
                                <label for="title" class="text-sm">Title</label>
                                <input type="text" name="title" id="title" class="border rounded w-full pl-1" x-model="title">
                            </div>
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="slug" class="text-sm">Slug</label>
                                <input type="text" name="slug" id="slug" class="border rounded w-full pl-1" :value="title.slugify()">
                            </div>
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="content" class="text-sm">Summary</label>
                                <textarea name="summary" id="summary" cols="30" rows="10" class="border rounded w-full hidden">{{ old('summary', $project->summary) }}</textarea>
                                <div id="summary-toolbar" class="w-full"></div>
                                <div id="summary-editor" class="w-full">
                                    {!! old('summary', $project->summary) !!}
                                </div>
                            </div>
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="content" class="text-sm">Content</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="border rounded w-full hidden">{{ old('content', $project->content) }}</textarea>
                                <div id="content-toolbar" class="w-full"></div>
                                <div id="content-editor" class="w-full">
                                    {!! old('content', $project->content) !!}
                                </div>
                            </div>
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="link_url" class="text-sm">Tags</label>
                                <input type="text" name="tags" id="tags" class="border rounded w-full pl-1"
                                       value="{{ old('tags', $project->tags) }}">
                            </div>
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="link_url" class="text-sm">Link</label>
                                <input type="text" name="link_url" id="link_url" class="border rounded w-full pl-1"
                                       value="{{ old('link_url', $project->link_url) }}">
                            </div>
                            @if(isset($project->image_url))
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="new_image" class="text-sm">Image</label>
                                <img src="{{ asset(old('image_url', $project->image_url)) }}" alt="No image set" class="h-36 w-36 object-cover">
                            </div>
                            @endif
                            <div class="flex flex-col mt-2 items-start w-full max-w-screen-md">
                                <label for="new_image" class="text-sm">Upload {{ isset($project->image_url) ? 'new' : '' }} image</label>
                                <input type="file" name="new_image" id="new_image" class="border rounded w-full pl-1"
                                       value="{{ old('new_image', $project->new_image) }}">
                            </div>
                            <button class="border rounded bg-green-300 py-1 px-3 mt-2" type="submit">Save</button>
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            @endif
                        </div>
                    </form>



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toolbarOptions = [
                [{ 'font': [] }],
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown

                ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
                ['blockquote', 'code-block'],
                [{ 'header': 1 }, { 'header': 2 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],

                [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

                [{ 'direction': 'rtl' }],                         // text direction
                [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
                [{ 'align': [] }],
                ['image'],

                ['clean']                                         // remove formatting button
            ];

            var quill_summary = new Quill('#summary-editor', {
                modules: {
                    toolbar: toolbarOptions,
                },
                theme: 'snow',
            });
            quill_summary.on('text-change', function(delta, oldDelta, source) {
                document.getElementById('summary').innerText = quill_summary.root.innerHTML;
            })

            var quill_content = new Quill('#content-editor', {
                modules: {
                    toolbar: toolbarOptions,
                },
                theme: 'snow',
            });
            quill_content.on('text-change', function(delta, oldDelta, source) {
                document.getElementById('content').innerText = quill_content.root.innerHTML;
            })
        })
        String.prototype.slugify = function (separator = "-") {
            return this
                .toString()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9 ]/g, '')
                .replace(/\s+/g, separator);
        };
    </script>


</x-app-layout>
