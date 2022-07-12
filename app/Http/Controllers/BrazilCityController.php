<?php

namespace App\Http\Controllers;

use App\Models\BrazilCity;
use App\Http\Requests\StoreBrazilCityRequest;
use App\Http\Requests\UpdateBrazilCityRequest;

class BrazilCityController extends Controller
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
     * @param  \App\Http\Requests\StoreBrazilCityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrazilCityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrazilCity  $brazilCity
     * @return \Illuminate\Http\Response
     */
    public function show(BrazilCity $brazilCity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrazilCityRequest  $request
     * @param  \App\Models\BrazilCity  $brazilCity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrazilCityRequest $request, BrazilCity $brazilCity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrazilCity  $brazilCity
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrazilCity $brazilCity)
    {
        //
    }
}
