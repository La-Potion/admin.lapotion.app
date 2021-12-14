<?php

namespace App\Http\Controllers;

use App\Models\ModeJeu;
use App\Http\Requests\StoreModeJeuRequest;
use App\Http\Requests\UpdateModeJeuRequest;

class ModeJeuController extends Controller
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
     * @param  \App\Http\Requests\StoreModeJeuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModeJeuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModeJeu  $modeJeu
     * @return \Illuminate\Http\Response
     */
    public function show(ModeJeu $modeJeu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModeJeu  $modeJeu
     * @return \Illuminate\Http\Response
     */
    public function edit(ModeJeu $modeJeu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModeJeuRequest  $request
     * @param  \App\Models\ModeJeu  $modeJeu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModeJeuRequest $request, ModeJeu $modeJeu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModeJeu  $modeJeu
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModeJeu $modeJeu)
    {
        //
    }
}
