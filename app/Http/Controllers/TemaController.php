<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use App\Models\tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return tema::all();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tema $tema)
    {
        //
    }
}
