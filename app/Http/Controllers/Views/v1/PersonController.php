<?php

namespace App\Http\Controllers\Views\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function show(Person $person){
        return view('v1.person.show',with($person));
    }
    public function index() {
        $people= Person::paginate(5);
        return view('v1.home', with($people)) ;
    }

    /**
     * @param Request $request
     * @return PersonResource
     */
    public function store(Request $request){
        //create the person
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',

        ]);
        $person= Person::create($request->all());
        return new PersonResource($person);
    }

    public function update(Person $person,Request $request):PersonResource{
        $person->update($request->all());
        return new PersonResource($person);
    }
    public function destroy(Person $person){
        $person->delete();
        return response()->json();
    }
}
