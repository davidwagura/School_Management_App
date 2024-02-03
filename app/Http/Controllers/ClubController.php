<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;

class ClubController extends Controller
{
    public function index() {
    
        $clubs = Clubs::all();
 
        return view('club.index', ['club' => $clubs]);
     }
 
    public function create() {
        return view('club.create');
     }
 
    public function store(Request $request)
        {
                    $club = new Clubs;
                    $club->name = $request->name;
                    $club->patron = $request->patron;
                    $club->save();
                
    
            return redirect(route("club.index"));
    
        }

        public function update(Request $request, Clubs $club) {

            $club->name = $request->name;
            $club->patron = $request->patron;
            $club->save();

            return redirect(route('club.index'));
        }
        public function edit(Clubs $club)  
        {         
            return view('club.edit', ['club' => $club]);
        }
    
        public function delete(Clubs $club)
        {
    
            $club->delete();
    
            return redirect(route('club.index'));
        }
    
        public function add(Request $request) 
        {
            
            return redirect(route('club.create'));
        }
    
 
    

}
