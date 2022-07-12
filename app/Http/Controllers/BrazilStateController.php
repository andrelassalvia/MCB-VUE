<?php

namespace App\Http\Controllers;

use App\Models\BrazilState;
use App\Http\Requests\StoreBrazilStateRequest;
use App\Http\Requests\UpdateBrazilStateRequest;

class BrazilStateController extends Controller
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
     * @param  \App\Http\Requests\StoreBrazilStateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrazilStateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrazilState  $brazilState
     * @return \Illuminate\Http\Response
     */
    public function show(BrazilState $brazilState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrazilStateRequest  $request
     * @param  \App\Models\BrazilState  $brazilState
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrazilStateRequest $request, BrazilState $brazilState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrazilState  $brazilState
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrazilState $brazilState)
    {
        //
    }
}
