<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Http\Requests\StoreCarteRequest;
use App\Http\Requests\UpdateCarteRequest;

class CarteController extends Controller
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
     * @param  \App\Http\Requests\StoreCarteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function show(Carte $carte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function edit(Carte $carte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarteRequest  $request
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarteRequest $request, Carte $carte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carte $carte)
    {
        //
    }
}
