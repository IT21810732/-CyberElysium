<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task = new Student();
    }

    public function index (){

        $response ['tasks'] = $this->task->all();
        return view('pages.student.index')->with($response);
    }

    public function store(Request $request){
       $this->task->create($request->all());

       return redirect()->route('student');
    }

    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();
        return redirect()->route('student');
    }
}
