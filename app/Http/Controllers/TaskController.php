<?php

namespace App\Http\Controllers;
use App\Models\Tasks;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function add(){
        return view('add');
    }

    public function create(Request $request){

        $request->validate([
        'title' => 'required|string|max:255',
        'description'=>'required|string|',
        ]);

        Tasks::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 'incomplete',
        ]);

       return redirect('/');
    }

    public function read(){

    $tasks=Tasks::all();
    return view('view',compact('tasks'));

    }

    public function edit($id){
    $edit_tasks=Tasks::findOrFail($id);
    return view('edit',compact('edit_tasks'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required|string|max:50',
            'description'=>'required|string'

        ]);

        $updated_tasks=Tasks::findOrFail($id);


        $updated_tasks->update($request->all());
        return redirect()->route('view_task');

    }

    public function delete($id){
    $delete_users=Tasks::findOrFail($id);
    $delete_users->delete();
    return redirect()->route('view_task');

}

}


