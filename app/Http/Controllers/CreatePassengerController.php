<?php

namespace App\Http\Controllers;

use App\Models\CreatePassenger;
use Illuminate\Http\Request;

class CreatePassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create.passengers');
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
     * @param  \App\Models\CreatePassenger  $createPassenger
     * @return \Illuminate\Http\Response
     */
    public function show(CreatePassenger $createPassenger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreatePassenger  $createPassenger
     * @return \Illuminate\Http\Response
     */
    public function edit(CreatePassenger $createPassenger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreatePassenger  $createPassenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreatePassenger $createPassenger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreatePassenger  $createPassenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreatePassenger $createPassenger)
    {
        //
    }
}
