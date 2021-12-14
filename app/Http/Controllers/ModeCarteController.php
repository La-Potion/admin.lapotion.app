<?php

namespace App\Http\Controllers;

use App\Models\ModeCarte;
use App\Http\Requests\StoreModeCarteRequest;
use App\Http\Requests\UpdateModeCarteRequest;

class ModeCarteController extends Controller
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
     * @param  \App\Http\Requests\StoreModeCarteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModeCarteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModeCarte  $modeCarte
     * @return \Illuminate\Http\Response
     */
    public function show(ModeCarte $modeCarte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModeCarte  $modeCarte
     * @return \Illuminate\Http\Response
     */
    public function edit(ModeCarte $modeCarte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModeCarteRequest  $request
     * @param  \App\Models\ModeCarte  $modeCarte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModeCarteRequest $request, ModeCarte $modeCarte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModeCarte  $modeCarte
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModeCarte $modeCarte)
    {
        //
    }
}
