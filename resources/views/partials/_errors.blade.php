@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
@foreach($errors->all() as $error)

  <ul class = "form-errors">
     <li> {{$error}}</li>
  </ul>

@endforeach

</div>
@endif