<?php

namespace App\Http\Controllers;

use App\Models\barangPinjam;
use Illuminate\Http\Request;

class BarangPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pinjam'] = barangpinjam::all();
        return view('admin.dbarangpinjam', $data);
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
     * @param  \App\Models\barangPinjam  $barangPinjam
     * @return \Illuminate\Http\Response
     */
    public function show(barangPinjam $barangPinjam)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangPinjam  $barangPinjam
     * @return \Illuminate\Http\Response
     */
    public function edit(barangPinjam $barangPinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangPinjam  $barangPinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barangPinjam $barangPinjam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangPinjam  $barangPinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangPinjam $barangPinjam)
    {
        //
    }
}
