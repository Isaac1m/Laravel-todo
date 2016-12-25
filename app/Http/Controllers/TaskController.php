<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Contracts\View\Factory as View;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\URL;

use App\Task;

class TaskController extends Controller
{
    

    protected $view;

    public function __construct(View $view){

        $this->view = $view;
    }

    /**
     * Display a listing of all tasks.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $tasks = Task::Where("completed","=",False)->orderBy('created_at','dec')->get();
        return $this->view->make('tasks.index')->withTasks($tasks);
    }

    /**
     * Show the form for creating a new task.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return $this->view->make('tasks.create');
    }

    /**
     * Store a newly created tasks in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[

                "title" =>  'required | max:255',
                "detail" => 'required | max:300',
            ]);

        if($validator->fails()){
            return redirect('tasks/create')
            ->withInput()
            ->withErrors($validator);
        }

            $task = new Task();

            $task->title = $request->title;
            $task->detail = $request->detail;
            $task->save();

            return redirect('/tasks');

    }

    /**
     * Display the specified task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $task = Task::find($id);

        return $this->view->make('tasks.show')->withTask($task);
    }

    /**
     * Show the form for editing the specified task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        return $this->view->make('tasks.edit')->withId($id);
    }

    /**
     * Update the specified task in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified task from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $task = Task::find($id);
        $task->delete();
        if(URL::current() == "/tasks/completed"){

            return redirect('/tasks/completed'); 
        }
           
        elseif (URL::current() == "/tasks/{id}") {
            # code...
        }

        return redirect('/tasks');

        


    }

}
