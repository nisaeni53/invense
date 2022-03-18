<?php

namespace App\Http\Controllers;

use App\Models\peminjam;
use Illuminate\Http\Request;

class PembalikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kembali'] = peminjam::where('status', 2)->get();
        return view('user.pembalikan', $data);
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
    public function update(Request $request, peminjam $peminjam, $id)
    {
        // dd($request->all());
        $peminjam = peminjam::findOrFail($id);
        $items = peminjam::where('id', $id)->update([
            'status' => $request->status
        ]);
        // $peminjam->status = $request->status;
        // $peminjam->update(['status'=>3]);
        // $peminjam->save();
        return redirect()->route('pengembalian.index')
                        ->with('Peminjaman Disetujui');
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
