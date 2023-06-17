<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Icecream;
use Illuminate\Http\Request;

class IcecreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $icecreams = Icecream::all(); // SELECT * FROM icecreams;

        return view("icecreams.index", ["icecreams" => $icecreams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("icecreams.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $icecream = new Icecream();
        $icecream->type = $request->input('type');
        $icecream->name = $request->input('name');
        $icecream->description = $request->input('description');
        $icecream->save();

        return redirect()->route("icecreams.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
