@extends('layouts.app')
@section('content')
    
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h2 class="section-subheading text-center "> Update tasks information  </h2>
        </div>	
        <br>
        <div class="col-lg-12">
    
            <form method="post" action="{{route('task.update',[$task->id])}}">
                <input type="hidden" name="_method" value="put">
                {{ csrf_field() }}
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="Project name"> Task name   <span class="amust">*</span> </label>
                        <input type="text" class="form-control" name="name" required placeholder="Enter the name of the task" value={{$task->name}}>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status"> Task status   <span class="amust">*</span> </label>
                        <select class="form-control" name="status">
                            <option value="0" @if($task->status == 0) selected @endif>Pending</option>
                            <option value="1" @if($task->status == 1) selected @endif>In progress</option>
                            <option value="2" @if($task->status == 2) selected @endif>Done</option>
                        </select>
                    </div>
                </div>

                <input type="hidden" class="form-control" name="project_id" required value="{{$task->project_id}}">

                       
                <div class="form-row">

                    <button type="submit" class="btn btn-primary text-center" > Update  </button>
                    <a href="{{route('project.show', $task->project_id)}}" class="btn btn-secondary text-center" >Go back to tasks</a>
                </div>
            </form>
        </div>       
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection