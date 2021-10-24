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
        $cardTypes = CardType::all();

        return response()->json($cardTypes, 200);
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
        return response()->json(['success' => 'Card Type Created Successfully'], 201);
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

        return response()->json(['success' => 'Card Type Updated Successfully'], 200);
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

        return response()->json(['success' => 'Card Type Deleted Successfully'], 200);
    }
}
