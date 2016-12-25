@extends('master')
@section('title', '| Edit Task')
@section('content')
<div class = "container">
<div class = "row">
 <div class = "col-md-8 col-md-offset-2">

 	<div class = "jumbotron">
 		
@if(count($tasks) > 0)

<table class="table table-hover">
  <thead>

<th>Title</th>
<th>Detail</th>
<th>Created</th>
<th></th>
<th></th>
  </thead>
  <tbody>
  	
@foreach($tasks as $task)

<tr>
	
	<td>{{$task->title}}</td>
	<td>{{substr($task->detail, 0,50)}} {{ strlen($task->detail) > 50 ? "..." : ""}}</td>
	<td>{{date('M j, Y',strtotime($task->created_at))}}</td>
	<td>
	<a href="{{route('tasks.show',$task->id)}}" class = "btn btn-sm btn-default">View</a>
	</td>
	<td>
	<a href="{{route('tasks.edit',$task->id)}}" class = "btn btn-sm btn-primary">Edit</a>
	</td>
	<td>
		<form action="{{route('tasks.destroy',$task->id)}}" method = "POST">
			<button type = "submit"  class = "btn btn-sm btn-danger">delete
			</button>
		{{csrf_field()}}
		{{method_field('DELETE')}}
		</form>
	</td>
</tr>

@endforeach


  </tbody>
</table>
@elseif(count($tasks) < 1)

 <h2 class = "text-center">No tasks available! :(</h2>
@endif

 	</div>

 </div>
</div>
</div>
@endsection