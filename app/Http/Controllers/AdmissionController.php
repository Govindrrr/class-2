<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Student;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admission(){
        $courses = Student::all();
        $admission = Admission::all();
        return view('admission', compact('courses','admission'));
    }
  
    public function store_admission(Request $req){
        $req->validate([
            "name"=>"required|max:255",
            "email"=>"required",
            "phone"=>"required",
            "address"=>"required",
            "course"=>'required'

        ]);
        $admission = new Admission();
        $admission->name = $req->name;
        $admission->email = $req->email;
        $admission->phone = $req->phone;
        $admission->address = $req->address;
        $admission->course_id = $req->course;
        $admission->save();
        return redirect()->back();
    }
    
    
}