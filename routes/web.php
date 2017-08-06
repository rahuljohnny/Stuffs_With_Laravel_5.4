<?php


Route::get('/welcome'  , function () {
	$tasks = App\Task::all();
	//$tasks = DB::table('tasks')->latest()->get(); //Will show the latest published articles first
	//return $tasks;
    return view('welcome', compact('tasks')); //passing the whole array
});

Route::get('/tasks'  , function () {
	$tasks = App\Task::all();
	//$tasks = DB::table('tasks')->latest()->get(); //Will show the latest published articles first
	//return $tasks;
    return view('tasks.index', compact('tasks')); //passing the whole array
});


Route::get('/tasks/{tasks}', function ($id) {
	// dd($id);
	$task = App\Task::find($id);

	//$task = DB::table('tasks')->find($id); //Fetches only for one $id
	$tasks = DB::table('tasks')->latest()->get(); //Will fetch all articles ordered by date

	//dd($task);
	//return $tasks;
    return view('tasks.show', compact('task','tasks')); //passing task and tasks(collection of all the task) to tasks/show.blade.php
});