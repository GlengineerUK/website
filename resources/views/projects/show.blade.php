<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<h1>{{$project->title}}</h1>

<div class="border rounded">
    {!! $project->summary !!}
</div>

<div class="border rounded">
    {!! $project->content !!}
</div>

<br>

{{ $project->link_url }}

<br>

<img src="{{ asset($project->image_url) }}" alt="Some text">

<br>

{{ asset($project->image_url) }}
<br>
{{ $project->image_url }}
