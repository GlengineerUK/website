@foreach($projects as $project)
    <a href="{{route('projects.edit', $project)}}">{{$project->title}}</a>
    <br/>
@endforeach
