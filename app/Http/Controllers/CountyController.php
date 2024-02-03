<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class CountyController extends Controller
{
    public function index() {
    
        $counties = County::all();
 
        return view('county.index', ['counties' => $counties]);
     }
 
    public function create() {
        return view('county.create');
     }
 
    public function store(Request $request)
        {
                    $county = new County;
                    $county->name = $request->name;
                    $county->county_code = $request->county_code;
                    $county->save();
                
    
            return redirect(route("county.index"));
    
        }

        public function update(Request $request, county $county) {

            $county->name = $request->name;
            $county->county_code = $request->county_code;
            $county->save();

            return redirect(route('county.index'));
        }
        public function edit(County $county)  
        {         
            return view('county.edit', ['county' => $county]);
        }
    
        public function delete(County $county)
        {
    
            $county->delete();
    
            return redirect(route('county.index'));
        }
    
        public function add(Request $request) 
        {
            
            return redirect(route('county.create'));
        }
    
 
}
