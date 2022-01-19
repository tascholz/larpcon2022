<?php

namespace App\Http\Controllers;

use App\Models\Orga;
use Illuminate\Http\Request;

class OrgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Orga::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Orga::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orga  $orga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Orga::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orga  $orga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orga = auth()->user()->orga;
        $orga->update($request->all());
        return $orga;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orga  $orga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Orga::destroy($id);
    }

    
}
