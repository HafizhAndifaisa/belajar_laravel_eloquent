<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class ApiUsersDetailController extends Controller
{
    public function index()
    {
        return UserModel::all();
    }
    public function create(request $request)
    {
        $userdetail = new UserModel;
        $userdetail->nama=$request->nama;
        $userdetail->usia=$request->usia;
        $userdetail->kota=$request->kota;
        $userdetail->save();

        return "Data berhasil Masuk";
    }
    public function update(request $request,$id)
    {
        $nama=$request->nama;
        $usia=$request->usia;
        $kota=$request->kota;

        // dd($nama);

        $userdetail = UserModel::find($id);
        $userdetail->nama=$nama;
        $userdetail->usia=$usia;
        $userdetail->kota=$kota;

        $userdetail->save();

        return "Data berhasil di Update";
    }
    public function delete($id)
    {
        $userdetail = UserModel::find($id);
        $userdetail->delete();

        return "Data berhasil di Hapus";
    }
    public function detail($id)
    {
        $userdetail = UserModel::find($id);

        return $userdetail;
    }
}
