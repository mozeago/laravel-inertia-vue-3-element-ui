<?php

namespace App\Http\Controllers;

use App\Models\Herb;
use App\Http\Requests\StoreHerbRequest;
use App\Http\Requests\UpdateHerbRequest;
use Inertia\Inertia;

class HerbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $herbs = Herb::all();
        return Inertia::render('Home', ['herbs' => $herbs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHerbRequest $request)
    {
        Herb::create([
            'herb_name' => $request->herb_name,
            'herb_used_for' => $request->herb_used_for,
            'herb_description' => $request->herb_description,
            'herb_common_location_found' => $request->herb_common_location_found
        ]);
        return redirect()->route('herbs.index')->with('message', 'Herb information saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Herb $herb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($herb_id)

    {
        $herb = Herb::find($herb_id);
        return Inertia::render('Edit', ['herb' => $herb]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHerbRequest $request, Herb $herb)
    {
        $herb->herb_name = $request->herb_name;
        $herb->herb_used_for = $request->herb_used_for;
        $herb->herb_description = $request->herb_description;
        $herb->herb_common_location_found = $request->herb_common_location_found;
        $herb->save();
        return redirect()->route('herbs.index')->with('mesage', 'Herb details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($herb_id)
    {
        $herb_id = Herb::find($herb_id)->delete();
        sleep(1);
        return redirect()->route('herbs.index')->with('mesage', 'Herb Deleted');
    }
}
