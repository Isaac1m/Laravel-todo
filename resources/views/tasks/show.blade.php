@extends('master')
@section('title', '| Display Task')
@section('stylesheets')
@section('content')

<div class = "container">
<div class = "row">
 <div class = "col-md-6 col-md-offset-3">

  <div class = "jumbotron">

      <p> {{$task->title}} </p>

	<div >
		{!!nl2br($task->detail)!!}

		
		<div>
		
	       {{date('M j, Y  h:i a',strtotime($task->created_at))}}
		
	     </div>

	</div>

</div>
</div>
</div>


<div class = "col-md-6 col-md-offset-3">
  <form action = "{{route('tasks.done',$task->id)}}" method = "POST">
	<button type = "submit" class = "btn  btn-success btn-block">
		Mark as completed
	</button>

	{{csrf_field()}}
</form>

</div>

</div>
@endsection