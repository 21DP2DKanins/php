<?php

namespace App\Http\Controllers;

use App\Models\kurss;

use Illuminate\Http\Request;

class KurssController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $kurss =  kurss::all();
        return response()->json($kurss);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kurss = kurss::create($request->validated());

        return response()->json($kurss, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
