<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return szavak::all();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $szavak = Szavak::where('temaID',$id)
      -> get();
      return $szavak;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(szavak $szavak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, szavak $szavak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(szavak $szavak)
    {
        //
    }
}
