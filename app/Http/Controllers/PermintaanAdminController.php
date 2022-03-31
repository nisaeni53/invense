<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permintaan;
use App\Models\permintaanAdmin;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PermintaanAdminController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['permintaan'] = permintaan::all();
        $data['user'] = User::all();
        $data['user'] = User::where('role', 'admin')->get();
        return view('admin.dpermintaan', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['pinjam'] = permintaan::all();
        $data['user'] = User::all();
        return view('admin.permintaan', $data);
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
    public function update(Request $request, permintaan $permintaan, $id)
    {
        //
        $permintaan = permintaan::findOrFail($id);
        $items = permintaan::where('id', $id)->update([
            'status' => 2
        ]);
        // $peminjam->status = $request->status;
        // $peminjam->update(['status'=>3]);
        // $peminjam->save();
        return redirect()->route('dpermintaan.index')
                        ->with('Peminjaman Disetujui');
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
