@extends('master')
@section('title', '| Add New Task')
@section('content')

<div class = "container">
<div class="panel panel-default add-task-panel">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Add Task</h3>
  </div>
  <div class="panel-body">
    <div class = "row">
    @include('partials._errors')
	<form class="form-horizontal" method = "POST" action = "{{route('tasks.store')}}">
		{{csrf_field()}}
  <div class="form-group">
    <label for="title" class="col-md-4 control-label">Title</label>
    <div class="col-md-4">
      <input type="text" class="form-control" id="title" name = 'title'>
    </div>
  </div>

  <div class="form-group">
    <label for="detail" class="col-md-4 control-label">Task Details</label>
    <div class="col-md-4">
      <textarea class="form-control" id="detail" name = 'detail' >
      </textarea>
    </div>
  </div>
 
  
  <div class="form-group">
    <div class="col-md-offset-4 col-md-4">
      <button type="submit" class="btn btn-default btn-block">Add task</button>
    </div>
  </div>
 
</form>

  </div>
</div>
</div>
</div> <!--container-->

@endsection
