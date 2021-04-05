<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_guru = \App\Guru::all();
        return view('guru.index',['data_guru' => $data_guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Insert Ke Table User
        $user = new \App\User;
        $user->role = 'guru';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('smknasionalbdg');
        $user->remember_token = str_random(60);
        $user->save();

        //Insert To Table Guru
        $request->request->add(['user_id' => $user->id]);
        $guru = \App\Guru::create($request->all());
        return redirect('/guru')->with('sukses','Data Berhasil Diinput');
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

    public function delete($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete($guru);
        return redirect('/guru')->with('sukses','Data Berhasil Dihapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = \App\Guru::find($id);
        return view('guru/edit',['guru' => $guru]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $guru = \App\Guru::find($id);
        $guru->update($request->all());
        if($request->hasFile('avatar'))
        {
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $guru->avatar = $request->file('avatar')->getClientOriginalName();
            $guru->save();
        }
        return redirect('/guru')->with('sukses','Data Berhasil Diupdate');
    }

    public function profil($id)
    {
        $guru = \App\Guru::find($id);
        return view('guru.profil',['guru' => $guru]);
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
