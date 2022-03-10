@extends('layouts.app')
@section('content')
    
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center text-center">
            <h2 class="section-subheading "> Add new project </h2>		 
        </div>	
        <br>
        <div class="col-lg-12">
    
            <form method="post" action="{{route('project.store')}}">
                {{ csrf_field() }}
                <div class="form-row pb-1">
                    <div class="form-group col-md-6">
                        <label for="Project name"> Name <span class="amust">*</span> </label>
                        <input type="text" class="form-control" name="name" required placeholder="Enter the name of the project">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary text-center" > Save  </button>
                    <button type="button" class="btn btn-secondary text-center" onclick="javascript:history.go(-1)" > Back  </button>
                    
                </div>
            </form>
        </div>       
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection