<?php

namespace App\Http\Controllers;

use App\Models\permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pinjam'] = permintaan::all();
        return view('user.permintaan', $data);
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
        return view('user.permintaan', $data);
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
        $rule = [
            'nama_barang' => 'required',
            'nama_user' => 'required',
            'jumlah_permintaan' => 'required',
            'deskripsi' => 'required|string',
            'foto_barang' => 'required|mimes:jpg,jpeg,tmp,png',
        ];

        $this->validate($request, $rule);
        $input = $request->all();
        if ($request->hasFile('foto_barang')) {
            $foto_barang = $request->file('foto_barang');
            $foto_ext = $foto_barang->getClientOriginalExtension();
            $foto_name = Str::random(8);

        $upload_path = 'assets/uploads/user/karakter';
        $imagename = $upload_path.'/'.$foto_name.'.'.$foto_ext;
        $request->file('foto_barang')->move($upload_path,$imagename);

        $input['foto_barang'] = $imagename;
        }

        $status = permintaan::create($input);
        if ($status){
            return redirect('user/dashboard')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('user/permintaan')->with('error', 'Data gagal ditambahkan');
        }
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
