{{-- Show lsiting of all the completed tasks --}}

@extends('master')
@section('title', '| Completed Tasks')
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
  </thead>
  <tbody>
  	
@foreach($tasks as $task)

<tr>
	
	<td>{{$task->title}}</td>
	<td>{{substr($task->detail, 0,100)}} {{ strlen($task->detail) > 50 ? "..." : ""}}</td>
	<td>{{date('M j, Y',strtotime($task->created_at))}}</td>
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

 <h2 class = "text-center">No tasks done yet! :(</h2>
@endif

 	</div>

 </div>
</div>
</div>
@endsection