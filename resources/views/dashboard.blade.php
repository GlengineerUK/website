<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end">
                <a href="{{route('projects.create')}}" type="button" class="px-4 py-1 mx-1 mb-3 bg-blue-600 hover:bg-blue-500 text-white rounded">New Project</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="border border-blue-300 rounded-lg">
                    <div class="px-4 py-2 rounded-t-lg border-b border-blue-300 bg-blue-300">
                        <span class="font-bold tracking-wide text-gray-800 text-lg">Projects</span>
                    </div>
                    <div class="px-4 mt-2">
                        <table class="w-full text-gray-800">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="border-b">Title</th>
                                <th class="border-b">Status</th>
                                <th class="border-b"></th>
                                <th class="border-b"></th>
                                <th class="border-b"></th>
                            </tr>

                            </thead>

                            <tbody>

                            @if($projects->count() === 0)
                                <tr>
                                    <td colspan="3"><div class="px-8 py-2">There are no projects.</div></td>
                                </tr>
                            @endif
                            @foreach($projects as $index => $project)
                                @php $row_bg_colour = $index % 2 === 0 ? "" : "bg-gray-50" @endphp
                                <tr class="text-sm {{ $row_bg_colour }} hover:bg-blue-100">
                                    <td class="py-1 px-4">
                                        <span>{{ $project->title }}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-xs px-2 py-0.5 font-semibold leading-5 tracking-wide {{ $project->published ? "bg-green-200 text-green-800" : "bg-red-200 text-red-800" }} rounded-xl">{{ $project->published_status }}</span>
                                    </td>
                                    <td class="text-center w-14 text-xs">
                                        <a href="{{route('projects.show', $project)}}" class="px-2 py-0.5 rounded hover:bg-blue-500 hover:text-white">View</a>
                                    </td>
                                    <td class="text-center w-14 text-xs">
                                        <a href="{{route('projects.edit', $project)}}" class="px-2 py-0.5 rounded hover:bg-blue-500 hover:text-white">Edit</a>
                                    </td>
                                    <td class="text-center w-14 text-xs">
                                        <a href="{{$project->published === 0 ? route('projects.publish', $project) : route('projects.unpublish', $project) }}"
                                           class="px-2 py-0.5 rounded hover:bg-{{ $project->published ? "red" : "green" }}-500 hover:text-white">{{ $project->published_status_toggle }}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
