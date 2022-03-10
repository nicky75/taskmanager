@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <h2 class="section-subheading text-center"> Task list of project {{ $project->name }} </h2>
            </div>
            <div>
                <table class="table table-striped">
                    <tr>
                        <th>task name</th>
                        <th>task status</th>
                        <th></th>
                        <th></th>
                    </tr>
                    
                    <?php 
                    $array = ['Pending', 'In Progress', 'Done']; 
                    foreach ($project->tasks as $task) {
                        $arrayView = $array[$task->status];
                    ?>
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>
                                {{ $arrayView }}
                            </td>
                            <td class="text-danger"><a class="btn btn-secondary text-center" href="{{ route('task.edit', $task->id) }}">edit</a> 
                            <?php 
                                if ($task->status != 2) {
                            ?>
                            / <a class="btn btn-secondary text-center" href="#" onclick="document.getElementById('markdone{{ $task->id }}').submit();">mark as done</a> 
                            <?php 
                                }
                            ?>
                            </td>
                            <td class="text-danger">
                                <a class="btn btn-danger text-center" href="#" onclick="
                                    var result = confirm('Do you really want to delete this task {{ $task->name}}?');
                                        if( result ){
                                                event.preventDefault();
                                                document.getElementById('deleteform{{ $task->id }}').submit();
                                        }
                                            ">
                                    Delete
                                </a>
                                <form id="deleteform{{$task->id}}" name="deleteform" action="{{ route('task.destroy',[$task->id]) }}" 
                                    method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">       
                                </form>
                                <form id="markdone{{$task->id}}" name="markdone" action="{{ route('task.update',[$task->id]) }}" 
                                    method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">       
                                        <input type="hidden" name="status" value="2">       
                                        <input type="hidden" name="name" value="{{ $task->name}}">       
                                </form>
                            </td>
                            <td></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
            <br>
            <div class="col-lg-12">
                <a class="btn btn-primary text-center" href="{{ route('task.create', [ 'id'=>$project->id]) }}">Add a task</a>
                <a class="btn btn-secondary text-center" href="{{ route('project.index') }}">Back</a>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
