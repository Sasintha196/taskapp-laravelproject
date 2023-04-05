<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function store(Request $request){

        // dd($request->all()); api form 1k haraha pass krna data mehi request object eken apu serama data tika normally user ta echo krla pennanawa

        $task = new Task; //Task kiyana model eke $task kiyala aluth object 1k mema controller eka athule hadagannawa

        //task input kirima validate kirima
        // $this kiyanne api dn inna content eka, e kiyanne api dn me inna thana
        //task kiyanne textbox eke nama.
        //required kiyanne aniwaryai kiyana eka
        //max kiyanne uparima akuru, min kiyanne awama akuru
        $this->validate($request, [
            'task'=>'required|max:100|min:5',
        ]);


        $task->task = $request->task;
        $task->save();

        $data = Task::all(); //Task kiyana module 1 haraha table eke data serama $data variable 1ta assign karaganima

        // dd($data);
        //return redirect()->back(); // apahu inna page ekatama back wimata

        return view("tasks")->with('arraytypevariabletasks',$data);  //database eke da

    }

    
     //
     public function index() {
        $student = Task::all();
        return view('student.index', compact('student'));
    }

    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $task = new Task;

        $this->validate($request, [
            'task'=>'required|max:100|min:5',
        ]);

        $task->task = $request->input('');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/books/', $filename);
            $student->image = $filename;
        }
        $student->save();
        return redirect()->back()->with('status','image added successfully');
    }

}
