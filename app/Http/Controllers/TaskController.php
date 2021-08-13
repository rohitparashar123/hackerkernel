<?php

namespace App\Http\Controllers;
use App\Task;
use App\users;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class TaskController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {   
    $users = users::all();
    return view('form.task',compact('users'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
    $request->validate([   
    'user_name'=>'required',
    'task_name'=>'required',
    'task_type'=>' required',
    ]);
    $data = new Task;
    $data->user_name=$request->user_name;
    $data->task_name=$request->task_name;
    $data->task_type=$request->task_type;
    // dd($data);
    // die;
    $data->save();
    return redirect('/display-task')->with('succcess', 'task has been assigned');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Task  $task
    * @return \Illuminate\Http\Response
    */

    public function show(Task $task)
    {
    $data = Task::paginate(3);
    return view('form.display-task',compact('data'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Task  $task
    * @return \Illuminate\Http\Response
    */

    public function export() 
    {
    return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function search(Request $request){

    $taskList = task::where([
    ['task_type', '!=', Null],
    [function ($query) use ($request){
    if(($term = $request->term)){
    $query->orWhere('task_type', 'LIKE', '%' . $term . '%')->get();
    }

    }]    

    ])
    ->orderBy('id','desc')
    ->paginate(2);
    return view('form.search-results',compact('taskList'));
    }

}
