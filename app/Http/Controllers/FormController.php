<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;


class FormController extends Controller
    {
        public function index() {
    
            $form = Form::all();
     
            return view('form.index', ['form' => $form]);
         }
     
        public function create() {
            return view('form.create');
         }
     
        public function store(Request $request)
            {
                        $form = new Form;
                        $form->name = $request->name;
                        $form->class_teacher = $request->class_teacher;
                        $form->save();
                    
        
                return redirect(route("form.index"));
        
            }
    
            public function update(Request $request, Form $form) {
    
                $form->name = $request->name;
                $form->class_teacher = $request->class_teacher;
                $form->save();

                return redirect(route('form.index'));
            }
            public function edit(Form $form) 
            {         
                return view('form.edit', ['form' => $form]);
            }
        
            public function delete(Form $form)
            {
        
                $form->delete();
        
                return redirect(route('form.index'));
            }
        
            public function add(Request $request) 
            {
                
                return redirect(route('form.create'));
            }
        
     
        
        }
    
