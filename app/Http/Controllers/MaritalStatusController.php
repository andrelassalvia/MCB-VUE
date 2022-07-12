<?php

namespace App\Http\Controllers;

use App\Models\MaritalStatus;
use App\Http\Requests\StoreMaritalStatusRequest;
use App\Http\Requests\UpdateMaritalStatusRequest;

class MaritalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaritalStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaritalStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MaritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function show(MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaritalStatusRequest  $request
     * @param  \App\Models\MaritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMaritalStatusRequest $request, MaritalStatus $maritalStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaritalStatus $maritalStatus)
    {
        //
    }
}
