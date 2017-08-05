<?php


Route::get('/tasks'  , function () {
	$tasks= DB::table('tasks')->latest()->get(); 
	//return $tasks;
    return view('tasks.index', compact('tasks')); //passing the whole array
});


Route::get('/tasks/{tasks}', function ($id) {
	// dd($id);
	$task= DB::table('tasks')->find($id);
	//dd($task);
	//return $tasks;
    return view('tasks.show', compact('task')); //passing the whole array
});