<?php

namespace App\Http\Controllers;

use App\Models\CreatePackages;
use Illuminate\Http\Request;

class CreatePackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create.packages');
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
     * @param  \App\Models\CreatePackages  $createPackages
     * @return \Illuminate\Http\Response
     */
    public function show(CreatePackages $createPackages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreatePackages  $createPackages
     * @return \Illuminate\Http\Response
     */
    public function edit(CreatePackages $createPackages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreatePackages  $createPackages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreatePackages $createPackages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreatePackages  $createPackages
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreatePackages $createPackages)
    {
        //
    }
}
