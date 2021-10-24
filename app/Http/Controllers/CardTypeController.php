<?php

namespace App\Http\Controllers;

use App\Models\CardType;
use Illuminate\Http\Request;

class CardTypeController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CardType::create($request->all());
        return 'created';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function show(CardType $cardType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardType $cardType)
    {
        $cardType->update($request->all());
        $cardType->save();

        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardType  $cardType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardType $cardType)
    {
        $cardType->delete();

        return 'deleted';
    }
}
