<?php

namespace App\Http\Controllers;

use App\Models\CreateTravels;
use Illuminate\Http\Request;

class CreateTravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create.travels');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function show(CreateTravels $createTravels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateTravels $createTravels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateTravels $createTravels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateTravels  $createTravels
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateTravels $createTravels)
    {
        //
    }
}
