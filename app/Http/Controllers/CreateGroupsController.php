<?php

namespace App\Http\Controllers;

use App\Models\CreateGroups;
use Illuminate\Http\Request;

class CreateGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create.groups');
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
     * @param  \App\Models\CreateGroups  $createGroups
     * @return \Illuminate\Http\Response
     */
    public function show(CreateGroups $createGroups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateGroups  $createGroups
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateGroups $createGroups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateGroups  $createGroups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateGroups $createGroups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateGroups  $createGroups
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateGroups $createGroups)
    {
        //
    }
}
