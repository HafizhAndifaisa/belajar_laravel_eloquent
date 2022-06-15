<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UsersDetailController extends Controller
{
    public function index()
    {
        $userdetail = UserModel::all();
        return view('users',['usersdetail'=>$userdetail]);
    }
    public function tambah()
    {
        return view('usertambah');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:200',
            'usia' => 'required|numeric',
            'kota' => 'required|max:200'
        ]);
        UserModel::create([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'kota' => $request->kota
        ]);
        return redirect('/users');
    }
}
