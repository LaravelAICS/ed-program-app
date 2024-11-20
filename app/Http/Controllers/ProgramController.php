<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Http\Resources\ProgramResource;
use App\Models\Program;
use Inertia\Inertia;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Program::query()
            ->where('name', 'like', '%'.request()->query('search').'%')
            ->orWhere('description', 'like', '%'.request()->query('search').'%')
            ->orderBy(
                request('sort_field', 'created_at'),
                request('sort_direction', 'desc')
            )
            ->paginate(10)
            ->appends(request()->query());

        return Inertia::render('Program/Index', [
            'model' => ProgramResource::collection($model),
            'queryParams' => request()->query(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgramRequest $request)
    {
        Program::create($request->validated());

        session()->flash('message', 'Successfully created a new program');

        return redirect(route('program.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return Inertia::render('Program/Edit', [
            'program' => new ProgramResource($program),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        $program->update($request->validated());

        session()->flash('message', 'Successfully updated the program');

        return redirect(route('program.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        $program->delete();

        session()->flash('message', 'Successfully deleted the program');

        return redirect(route('program.index'));
    }
}
