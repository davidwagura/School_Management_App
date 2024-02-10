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

        public function department (Department $department){

            $users = [
                [
                    'name' => 'John',
                    'Math' => 45,
                    'English' => 64,
                    'Physics' => 45,
                    'Biology' => 34,
                    'Chemistry' => 54,
                    'History' => 54,
                    'Geography' => 65,
                    'Business' => 54,
                    'Computer' => 43,
                    'Kiswahili' => 54,
                    'CRE' => 28,
                    'Agriculture' => 45,
                    'Total' => 54
                ],
                [
                    'name' => 'Lilian',
                    'Math' => 23,
                    'English' => 54,
                    'Physics' => 22,
                    'Biology' => 34,
                    'Chemistry' => 54,
                    'History' => 54,
                    'Geography' => 65,
                    'Business' => 54,
                    'Computer' => 43,
                    'Kiswahili' => 54,
                    'CRE' => 78,
                    'Agriculture' => 76,
                    'Total' => 54
                ],

                [
                    'name' => 'Faith',
                    'Math' => 56,
                    'English' => 44,
                    'Physics' => 43,
                    'Biology' => 34,
                    'Chemistry' => 54,
                    'History' => 54,
                    'Geography' => 65,
                    'Business' => 54,
                    'Computer' => 43,
                    'Kiswahili' => 54,
                    'CRE' => 22,
                    'Agriculture' => 32,
                    'Total' => 45
                ],

                [
                    'name' => 'Peter',
                    'Math' => 60,
                    'English' => 54,
                    'Physics' => 45,
                    'Biology' => 34,
                    'Chemistry' => 54,
                    'History' => 55,
                    'Geography' => 65,
                    'Business' => 54,
                    'Computer' => 43,
                    'Kiswahili' => 54,
                    'CRE' => 78,
                    'Agriculture' => 45,
                    'Total' => 54
                ],

                [
                    'name' => 'mary',
                    'Math' => 60,
                    'English' => 54,
                    'Physics' => 45,
                    'Biology' => 45,
                    'Chemistry' => 54,
                    'History' => 54,
                    'Geography' => 65,
                    'Business' => 54,
                    'Computer' => 43,
                    'Kiswahili' => 54,
                    'CRE' => 78,
                    'Agriculture' => 45,
                    'Total' => 54
                ],

                [
                    'name' => 'Jane',
                    'Math' => 60,
                    'English' => 54,
                    'Physics' => 45,
                    'Biology' => 34,
                    'Chemistry' => 54,
                    'History' => 74,
                    'Geography' => 65,
                    'Business' => 54,
                    'Computer' => 83,
                    'Kiswahili' => 54,
                    'CRE' => 78,
                    'Agriculture' => 45,
                    'Total' => 54
                ],





            ];
            return view('department.view', ['users' => $users]); 
        }

        public function records (Department $department){
            return view('department.records');
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
