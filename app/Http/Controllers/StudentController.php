<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $students = Student::all();
 
        return view('student.index', ['students' => $students]);
     }
 
    public function create() {
        return view('student.create');
     }
 
    public function store(Request $request)
        {
                    $student = new Student;
                    $student->first_name = $request->first_name;
                    $student->last_name = $request->last_name;
                    $student->gender = $request->gender;
                    $student->password = $request->password;
                    $student->admission_number = $request->admission_number;
                    $student->home_county = $request->home_county;
                    $student->date_of_birth = $request->date_of_birth;
                    $student->save();
                
    
            return redirect(route("student.index"));
    
        }

        public function update(Request $request, Student $student) {

            $student->first_name = $request->first_name;
            $student->last_name = $request->last_name;
            $student->gender = $request->gender;
            $student->password = $request->password;
            $student->admission_number = $request->admission_number;
            $student->home_county = $request->home_county;
            $student->date_of_birth = $request->date_of_birth;
            $student->save();

            return redirect(route('student.index'));
        }
        public function edit(Student $student) 
        {         
            return view('student.edit', ['student' => $student]);
        }
    
        public function delete(Student $student)
        {
    
            $student->delete();
    
            return redirect(route('student.index'));
        }
    
        public function add(Request $request) 
        {
            
            return redirect(route('student.create'));
        }
    
 
    
    }
