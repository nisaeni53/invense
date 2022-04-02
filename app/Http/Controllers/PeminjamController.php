<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use App\Models\User;
use App\Models\barang;
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
        $data['user'] = User::all();
        $data['user'] = User::where('role', 'user')->get();
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
        $data['user'] = User::all();
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
    public function update($id)
    {
        $nama_b = peminjam::where('id', $id)->value('nama_barang');
        $jumlah_p = peminjam::where('id', $id)->value('jumlah_pinjam');
        $id_b = Barang::where('namab', $nama_b)->value('id');
        $stok_b = Barang::where('namab', $nama_b)->value('stokb');
        $update_b =Barang::find($id_b);
        $update_b->update([
            'stokb' => $stok_b - $jumlah_p
        ]);
        $update_b =peminjam::find($id);
        $update_b->update([
            'status' => 2
        ]);
        return redirect()->route ('barangpinjam.index');
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
