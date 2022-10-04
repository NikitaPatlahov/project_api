<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonApiController extends Controller
{
    public function getPerson()
    {
        return response()->json(Person::get(), 200);
    }

    public function getPersonId($id)
    {
        return response()->json(Person::find($id), 200);
    }

    public function personCreate(Request $request)
    {
        $person = Person::create($request->all());
        return response()->json($person, 201);
    }

}
