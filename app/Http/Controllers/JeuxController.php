<?php

namespace App\Http\Controllers;

use App\Models\Jeux;
use App\Http\Requests\StoreJeuxRequest;
use App\Http\Requests\UpdateJeuxRequest;

class JeuxController extends Controller
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
     * @param  \App\Http\Requests\StoreJeuxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJeuxRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function show(Jeux $jeux)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeux $jeux)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJeuxRequest  $request
     * @param  \App\Models\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJeuxRequest $request, Jeux $jeux)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeux  $jeux
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeux $jeux)
    {
        //
    }
}
