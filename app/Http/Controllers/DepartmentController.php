<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
    
        $department = Department::all();
 
        return view('department.index', ['department' => $department]);
     }
    public function create() {
        return view('department.create');
     }
 
    public function store(Request $request)
        {
                    $department = new Department;
                    $department->name = $request->name;
                    $department->patron = $request->patron;
                    $department->save();
                
    
            return redirect(route("department.index"));
    
        }

        public function update(Request $request, Department $department) {

            $department->name = $request->name;
            $department->patron = $request->patron;
            $department->save();

            return redirect(route('department.index'));
        }
        public function edit(Department $department)  
        {         
            return view('department.edit', ['department' => $department]);
        }

        public function department (){
            return view('department.view'); 
        }
    
    
        public function delete(department $department)
        {
    
            $department->delete();
    
            return redirect(route('department.index'));
        }
    
        public function add(Request $request) 
        {
            
            return redirect(route('department.create'));
        }
    
 

}
