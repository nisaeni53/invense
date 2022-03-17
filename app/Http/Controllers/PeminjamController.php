<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pinjam'] = peminjam::all();
        return view('admin.dpeminjaman', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['pinjam'] = peminjam::all();
        return view('admin.dbarangpinjam', $data);
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
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function show(peminjam $peminjam)
    {
        //
        // return view('admin.dbarangpinjam', $peminjam);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjam $peminjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjam $peminjam)
    {
        //
        $peminjam->status = $request->status;
        $peminjam->update(['status'=>2]);
        $peminjam->save();
        return redirect()->route('peminjam.create')
                        ->with('Peminjaman Disetujui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjam  $peminjam
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjam $peminjam)
    {
        //
        $peminjam->delete();
       
        return redirect()->route('peminjam.index')
                        ->with('Barang Dihapus');
    }
}
