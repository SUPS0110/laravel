<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function add()
    {
        return view('addlist');
    }
    public function list()
    {
        $students = Student::all();
        return view('studentlist',compact('students'));
    }
    public function store(Request $request)
    {
        $student= new student(); 
        $student->Name= $request->name;
        $student->Email= $request->email;
        $student->Phone= $request->phone;
        $student->Address= $request->address;
       $student->save();
       return back();
    }
    public function update(Request $request,student $id)
    {
        $id->Name= $request->name;
        $id->Email= $request->email;
        $id->Phone= $request->phone;
        $id->Address= $request->address;
       $id->save();
       return back();
    }
}
