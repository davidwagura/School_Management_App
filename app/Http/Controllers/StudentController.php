<?php

namespace App\Http\Controllers;

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
            $data = $request->validate
                ([
                    'first-name' => 'required',
                    'last-name' => 'required',
                    'gender' => 'required',
                    'form' => 'required',
                    'admission-number'=> 'required',
                    'home-county' => 'required',
                    'date-of-birth' => 'required'
                    
                ]);
    
            $newcars = Student::create($data);
    
            return redirect(route("student.index"));
    
        }
 
    public function edit(student $student) 
        {         
            return view('student.edit', ['student' => $student]);
        }
    public function update(Request $request,Student $student) 
        {
            $data = $request->validate([
                'name' => 'required',
                'model' => 'required',
                'description' => 'nullable'
                
            ]);
    
            $student->update($data);
    
            return redirect(route('student.index'));
        }
    
    public function delete(Student $student)
        {
    
            $student->delete();
    
            return redirect(route('student.index'));
        }
    
    public function add(Request $request) 
        {
            
            return redirect(route('student.add'));
        }
    
    
    }
