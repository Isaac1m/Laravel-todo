<?php
	
use App\Task;

use Illuminate\Contracts\View\Factory as View;


 Route::post('{id}/done', [

	'as' => 'tasks.done',

	function($id){

	$task = Task::find($id);

	$task->completed = True;

	$task->save();
 	
 	return redirect('/tasks/completed');
	
	

}]);


Route::get('tasks/completed',function(View $view)
    {

	$tasks = Task::Where('completed',True)->orderBy('created_at','desc')->get();
	return $view->make('tasks.done')->withTasks($tasks);
     
     });

Route::resource('tasks','TaskController');

