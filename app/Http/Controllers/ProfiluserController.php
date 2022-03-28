<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use File;

class ProfiluserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['user'] = User::all();
        return view('user.profil', $data);
        // return view('user.profil', array('user' => Auth::user()));
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
        $user = User::where('id',$id)->get();
        $data['user'] = $user;
        // dd($data);
        return view('user.profil', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, User $user)
    {
        //
        $rule = [
            'name => required',
            'email => required',
        ];
        $customMessages = [
            'email' => 'Field email Wajib Diisi!',
            'name.required' => 'Field Nama Wajib Diisi',
        ];

        $this->validate($request, $rule, $customMessages);
        $input = $request->all();

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->hasFile('image')) {
            File::delete($user->image);

            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $image_name = Str::random(8);

            $upload_path = 'image/';
            $imagename = $image_name.'.'.$image_ext;
            $request->file('image')->move($upload_path,$imagename);

        $user['image'] = $imagename;
    }

    // dd($user);

   
        $status = $user->save();
        if ($status){
            return redirect('user/dashboard')->with('success', 'Data berhasil diubah');
        }else{
            return redirect('user/profil')->with('error', 'Data gagal diubah');
        }
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
