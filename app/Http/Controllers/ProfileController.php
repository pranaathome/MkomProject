<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
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
        $data = $request->all();

        $validasi = Validator::make($data, [
            'username'     => 'required|max:255',
            'email'    => 'required|email|max:100|unique:users',
            'password' => 'required|confirmed|min:6',
            'level'    => 'required|in:admin,mahasiswa',
        ]);

        if ($validasi->fails()){
            return redirect()
                ->route('user.create')
                ->withInput()
                ->withErrors($validasi);
        }

        // Hash password
        $data['password'] = bcrypt($data['password']);

        User::create($data);
        Session::flash('flash_message', 'Data user berhasil disimpan.');

        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);
        return view('profile.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $data = $request->all();

        $validasi = Validator::make($data, [
            'username'     => 'required|max:255',
            'email'    => 'required|email|max:100|unique:users,email,' . $data['id'],
            // 'password' => 'sometimes|nullable|confirmed|min:6',
            // 'level'    => 'required|in:admin,mahasiswa',
        ]);

        if ($validasi->fails()){
            return redirect()
                ->route('profile.edit', $user->id)
                ->withErrors($validasi)
                ->withInput();
        }

        if ($request->filled('password')) {
            // Hash password
            $data['password'] = bcrypt($data['password']);
        } else {
            // Hapus password (password tidak update).
            $data = array_except($data, ['password']);
        }

        $user->update($data);
        Session::flash('flash_message', 'Data user berhasil diupdate.');

        return redirect()->route('profile.index');
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
