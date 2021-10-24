<?php

namespace App\Http\Controllers;

use App\Models\Chargeback;
use Illuminate\Http\Request;

class ChargebackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Chargeback::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chargeback = Chargeback::create($request->all());
        return response()->json($chargeback, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chargeback  $chargeback
     * @return \Illuminate\Http\Response
     */
    public function show(Chargeback $chargeback)
    {
        return response()->json($chargeback, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chargeback  $chargeback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chargeback $chargeback)
    {
        $chargeback->fill($request->all());
        return response()->json(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chargeback  $chargeback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chargeback $chargeback)
    {
        $chargeback->delete();
        return response()->json(202);
    }
}
