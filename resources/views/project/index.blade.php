@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-center">List of projects</h2>

    <table class="table table-striped">
        <tr>
            <th>project name</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->name }}</td>
            <td><a class="text-primary" href="/project/{{$project->id}}">tasks</a></td>
            <td class="text-danger">
                <a class="btn btn-danger text-center" href="#" onclick="
                                    var result = confirm('Do you really want to delete this project {{ $project->name}}?');
                                        if( result ){
                                                event.preventDefault();
                                                document.getElementById('deleteform{{ $project->id }}').submit();
                                        }
                                            ">
                    Delete
                </a>
                <form id="deleteform{{$project->id}}" name="deleteform" action="{{ route('project.destroy',[$project->id]) }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </td>
            <td></td>
        </tr>
        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('project.create')}}">New project</a>
</div>

@endsection