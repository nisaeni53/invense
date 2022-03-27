<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use App\Models\User;
use App\Models\userdashboard;
use Illuminate\Http\Request;

class UserdashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pinjam'] = peminjam::all();
        $data['user'] = User::all();
        return view('user.dashboard', $data);
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
     * @param  \App\Models\userdashboard  $userdashboard
     * @return \Illuminate\Http\Response
     */
    public function show(userdashboard $userdashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userdashboard  $userdashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(userdashboard $userdashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userdashboard  $userdashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userdashboard $userdashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userdashboard  $userdashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(userdashboard $userdashboard)
    {
        //
    }

    public function halamandua(){
        $data['pinjam'] = peminjam::all();
        $data['user'] = User::all();
        return view('user.dashboard', $data);
    }
}
