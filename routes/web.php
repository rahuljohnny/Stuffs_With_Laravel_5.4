<?php


Route::get('/tasks'  , function () {
	$tasks = DB::table('tasks')->latest()->get(); //Will show the latest published articles first
	//return $tasks;
    return view('tasks.index', compact('tasks')); //passing the whole array
});


Route::get('/tasks/{tasks}', function ($id) {
	// dd($id);
	$task = DB::table('tasks')->find($id);
	$tasks = DB::table('tasks')->latest()->get(); //Will show the latest published articles first

	//dd($task);
	//return $tasks;
    return view('tasks.show', compact('task','tasks')); //passing the whole array
});