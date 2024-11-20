<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProgramRequest;
use App\Models\Program;


class AddResourceController extends Controller
{
    public function addProgram(StoreProgramRequest $request)
    {
        Program::create($request->validated());

        session()->flash('message', 'Succcessfuly added a program');
    }

}
