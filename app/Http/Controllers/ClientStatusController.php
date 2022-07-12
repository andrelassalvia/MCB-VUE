<?php

namespace App\Http\Controllers;

use App\Models\ClientStatus;
use App\Http\Requests\StoreClientStatusRequest;
use App\Http\Requests\UpdateClientStatusRequest;

class ClientStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreClientStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ClientStatus $clientStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientStatusRequest  $request
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientStatusRequest $request, ClientStatus $clientStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientStatus $clientStatus)
    {
        //
    }
}
