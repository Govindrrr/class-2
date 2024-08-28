<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function Homepage(){
        $courses = Student::all();
        return view('welcome',compact('courses'));
    }

    public function Aboutpage(){
        return view('about');
    }
    public function Delete($id){
        $course = Student::find($id);
        $course->delete();
        return redirect()->route('home');
    }
    public function Update($id){
        $course = Student::find($id);
        return view('updatePage', compact('course'));
    }

    public function Main(Request $req){
        $req->validate([
            "name"=>"required|max:255",
            "price"=>"required|integer",
            "syllabus"=>"required",
            "image"=>"required|"
        ]);
        $course = new Student        ();
        $course->name = $req->name;
        $course->price = $req->price;
        $course->syllabus = $req->syllabus;
        
        if($req->hasFile('image')){
            $file = $req->image;
            $file_name = time() .'.'. $file->getClientOriginalExtension();
            $file->move('images', $file_name);
    
            $course->image = "images/". $file_name;
        }
        $course->save();
        return redirect()->route('home');
}
    public function Edit(Request $req, $id){
        $course = Student::find($id);
        $course->name = $req->name;
        $course->price = $req->price;
        $course->syllabus = $req->syllabus;
        
        if($req->hasFile('image')){
            $file = $req->image;
            $file_name = time() .'.'. $file->getClientOriginalExtension();
            $file->move('images', $file_name);
    
            $course->image = "images/". $file_name;
        }
        $course->update();
        return redirect()->route('home');
}

}