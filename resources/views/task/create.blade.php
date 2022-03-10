@extends('layouts.app')
@section('content')
    
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h2 class="section-subheading text-center ">Create new task</h2>
        </div>	
        <br>
        <div class="col-lg-12">
    
            <form method="post" action="{{route('task.store')}}">
                <input type="hidden" name="_method" value="post">
                {{ csrf_field() }}
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="Project name"> Task name   <span class="amust">*</span> </label>
                        <input type="text" class="form-control" name="name" required placeholder="Enter the name of the task">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status"> Task status   <span class="amust">*</span> </label>
                        <select class="form-control" name="status">
                            <option value="0">Pending</option>
                            <option value="1">In progress</option>
                            <option value="2">Done</option>
                        </select>
                    </div>
                </div>

                <input type="hidden" class="form-control" name="project_id" required value="{{$project->id}}">

                       

                <div class="form-row">
                    <button type="submit" class="btn btn-primary text-center" > Save </button>
                    <a href="{{route('project.show', $project->id)}}" class="btn btn-secondary text-center" >Go back to tasks</a>
                </div>
            </form>
        </div>       
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection