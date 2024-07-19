<?php

namespace App\Http\Controllers;

use App\Models\CreatePayments;
use Illuminate\Http\Request;

class CreatePaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create.payments');
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
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function show(CreatePayments $createPayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function edit(CreatePayments $createPayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreatePayments $createPayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreatePayments  $createPayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreatePayments $createPayments)
    {
        //
    }
}
