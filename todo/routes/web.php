<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks = \App\Models\Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

//отпр бд
Route::post('/task', function(Request $request){
    $validator = Validator::make($request->all(),[
        'name' => 'required|max:255'//arrayget
    ]);

    //iferror
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new \App\Models\Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

//deletedtasks
Route::delete('/task/{task}', function (\App\Models\Task $task) {
    $task->delete();

    return redirect('/');
});

