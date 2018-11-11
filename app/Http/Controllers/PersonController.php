<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function create()
    {
        return view('personCreate');
    }
    
    public function store(Request $request)
    {
        $person = new Person();
        $person->email = $request->get('email');
        $person->name = $request->get('name');
        $person->gender = $request->get('gender');
        $person->city = $request->get('city');
        $person->save();
        return redirect('personIndex')->with('success', 'Person has been successfully added');
        
    }
    
    public function index()
    {
        $persons=Person::all();
        return view('personIndex',compact('persons'));
    }
    
    public function edit($id)
    {
        $person = Person::find($id);
        return view('personEdit',compact('person','id'));
    }

    public function update(Request $request, $id)
    {
        $person= Person::find($id);
        $person->email = $request->get('email');
        $person->name = $request->get('name');
        $person->gender = $request->get('gender');
        $person->city = $request->get('city');
        $person->save();
        return redirect('personIndex')->with('success', 'Person has been successfully added');
    }

    public function destroy($id)
    {
        $person = Person::find($id);
        $person->delete();
        return redirect('personIndex')->with('success','Person has been  deleted');
    }
}
