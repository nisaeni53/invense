<?php

namespace App\Http\Controllers;

use App\Models\permintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.multitable');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function show(permintaan $permintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function edit(permintaan $permintaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permintaan $permintaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(permintaan $permintaan)
    {
        //
    }
}
