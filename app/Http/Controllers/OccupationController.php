<?php

namespace App\Http\Controllers;

use App\Models\Occupation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOccupationRequest;
use App\Http\Requests\UpdateOccupationRequest;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        dd($request->get('attr'));
        return Occupation::with(['clients'])->orderBy('name')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOccupationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOccupationRequest $request)
    {
        return Occupation::create($request->except('_token'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $occupation = Occupation::with(['clients'])->find($id);

       if($occupation === null){

        return response()->json(['msg' => 'Recurso nao encontrado'], 404); 
       }

       return $occupation;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationRequest  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOccupationRequest $request, $id)
    {
        $occupation = Occupation::find($id);
        if($occupation === null){

            return response()->json(['msg' => 'Recurso nao encontrado'], 404); 
        }
        else{
            $occupation->update($request->except('_token'));

            return response()->json($occupation);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $occupation = Occupation::find($id);
       if($occupation === null){
        return response()->json(['msg' => 'Recurso nao encontrado'], 404); 
       }
        $deleted = $occupation->delete();

        if ($deleted){
            return response()->json(['Msg' => 'Apagado com sucesso']);
        } else {
            return response()->json(['msg' => 'Problemas']);
        }
    }
}
