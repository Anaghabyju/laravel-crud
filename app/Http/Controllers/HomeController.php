<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout.index');
    }
    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'subject'=>'required',
            'mark'=>'required',
        ]);
        Student::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'subject' => $request->subject,
            'mark' => $request->mark,
        ]);
        return redirect()->route('register')->with('danger','student details added successfully');
    }
    public function view()
    {
        $data=Student::all();
        return view('view',compact('data'));
    }
     public function edit($id)
     {
        $data=Student::find($id);
        return view('edit',compact('data'));
     }
     public function update(Request $request,$id)
     {
        $del=Student::find($id);
        $del->name=$request->input('name');
        $del->gender=$request->input('gender');
        $del->subject=$request->input('subject');
        $del->mark=$request->input('mark');
         $del->update();
         return redirect()->route('view')->with('danger','student updation is siccessfully');
     }
     public function delete($id)
     {
        $del=Student::find($id);
        $del->delete();
        return redirect()->route('view')->with('danger','student deletion is successfully');
     }
}
