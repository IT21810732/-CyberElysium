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

        return view('pages.student.index');
    }

    public function store(Request $request){
       $this->task->create($request->all());

    }
}
