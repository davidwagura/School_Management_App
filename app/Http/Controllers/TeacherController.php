<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {

        $teachers = Teacher::all();
 
        return view('teacher.index', ['teachers' => $teachers]);
     }
 
    public function create() {
        return view('teacher.create');
     }
 
    public function store(Request $request)
        {
            $teacher = new Teacher;
            $teacher->first_name = $request->first_name;
            $teacher->last_name = $request->last_name;
            $teacher->gender = $request->gender;
            $teacher->work_number = $request->work_number;
            $teacher->save();
                
    
            return redirect(route("teacher.index"));
    
        }

        public function update(Request $request, Teacher $teacher) {

            $teacher->first_name = $request->first_name;
            $teacher->last_name = $request->last_name;
            $teacher->gender = $request->gender;
            $teacher->work_number = $request->work_number;
            $teacher->save();

            return redirect(route('teacher.index'));
        }
        public function edit(Teacher $teacher) 
        {         
            return view('teacher.edit', ['teacher' => $teacher]);
        }
    
        public function delete(Teacher $teacher)
        {
    
            $teacher->delete();
    
            return redirect(route('teacher.index'));
        }
    
        public function add(Request $request) 
        {
            
            return redirect(route('teacher.create'));
        }
    
 
    
}


