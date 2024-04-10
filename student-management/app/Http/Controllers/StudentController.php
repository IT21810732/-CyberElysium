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

    public function status($task_id){
        $task = $this->task->find($task_id);
        $task->status = 1;
        $task->update();

        return redirect()->route('student');
    }

    public function edit(Request $request){
        $response ['task'] =  StudentFacde::get($request['task_id']);

        return view('pages.student.edit')->with($response);

    }

    public function update(Request $request, $task_id){
        $task = $this->task->find($task_id);
        $task->update($request->all());

        return redirect()->route('student');
    }

}
