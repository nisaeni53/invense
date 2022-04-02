<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barang::latest()->paginate(5);
        return view('admin.dbarang',compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form.formbarang');
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
            'image' => 'required|mimes:jpg,jpeg,tmp,png',
            'namab' => 'required',
            'kategorib' => 'required',
            'jenisb' => 'required',
            'stokb' => 'required',
            'tanggalb' => 'required',
        ];
        $this->validate($request, $rule);
        $input = $request->all();
        if ($request->hasFile('image')) {
            $foto_barang = $request->file('image');
            $foto_ext = $foto_barang->getClientOriginalExtension();
            $foto_name = Str::random(8);

        $upload_path = 'assets/uploads/user/karakter';
        $imagename = $upload_path.'/'.$foto_name.'.'.$foto_ext;
        $request->file('image')->move($upload_path,$imagename);

        $input['image'] = $imagename;
        }

        $status = barang::create($input);
        if ($status){
            return redirect('barang')->with('success', 'Data berhasil ditambahkan');
        }else{
            return redirect('barang.create')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
        return view('admin.form.formeditbarang',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        //
        $request->validate([
            'namab' => 'required',
            'kategorib' => 'required',
            'jenisb' => 'required',
            'stokb' => 'required',
            'tanggalb' => 'required',
        ]);

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
      
        $barang->update($request->all());
      
        return redirect()->route('barang.index')
                        ->with('Produk Telah Sukses Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //
        $barang->delete();
       
        return redirect()->route('barang.index')
                        ->with('Barang Dihapus');
    }
}
