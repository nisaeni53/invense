<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\peminjam;
use Illuminate\Http\Request;

class Inventaris extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('user.inventaris');
        $data['barang'] = barang::all();
        return view('user.inventaris', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['barang'] = barang::all();
        return view('user.forminven', $data);
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
        // dd($request->all());
        $rule = [
            'nama_barang' => 'required',
            'nama_peminjam' => 'required|string',
            'jumlah_pinjam' => 'required|string',
            'jam_pelajaran' => 'required|integer',
        ];

        $this->validate($request, $rule);
        $input = $request->all();
        $status = peminjam::create($input);
        if ($status){
            return redirect('user/peminjaman/create')->with('success', 'Data berhasil ditambahkan');
        }
        // else{
        //     return redirect('user/peminjaman/create')->with('error', 'Data gagal ditambahkan');
        // } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
