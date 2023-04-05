<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{

    public function store(Request $request){

        $task = new Task; //create a new object of Task Model

        //validating input tasks
        $this->validate($request, [
            'task'=>'required|max:100|min:5',
            //task means, name of the textbox
            //required means that "must be included"
            //max - maximum characters, min - minimum characters
        ]);


        $task->task = $request->task;
        $task->save();

        $data = Task::all();
        //assigning all data of the table into "$data" variable, through "Task" Model.

        // dd($data);

        return view("tasks")->with('arraytypevariabletasks',$data);
        //return all data in $data variable as a parameter called arraytypevariabletasks, into the tasks page

        //return redirect()->back(); // use to return to current page after completing the process

    }


     //
     public function index() {
        $student = Task::all();
        return view('student.index', compact('student'));
    }

    public function create(){
        return view('student.create');
    }

}
