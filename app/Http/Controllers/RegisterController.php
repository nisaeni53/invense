<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::all();
        return view('user.profil', $data);
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
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $data['user'] = $user;
        return view('user.profil', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);
    
        //get data user by ID
        $user = User::findOrFail($user->id);
    
        if($request->file('image') == "") {
    
            $user->update([
                'name'     => $request->name,
                'role'   => $request->role,
                'email'   => $request->email
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/image/'.$user->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/image', $image->hashName());
    
            $user->update([
                'image'     => $image->hashName(),
                'name'     => $request->name,
                'role'   => $request->role,
                'email'   => $request->email
            ]);
    
        }
    
        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('user.profil')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('user.profil')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(register $register)
    {
        //
    }

    public function register (register $register) {
        return view('authentication.register');
    }

    public function simpanregister (Request $request) {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'remember_token' => Str::random(60),
        ]);

        return redirect('/');

    }

}
