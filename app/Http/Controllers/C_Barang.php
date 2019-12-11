<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class C_Barang extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $data = DB::select('select * from barangs');

        return response()->json($data);
    }

    public function detailBarang($id){
        $detailBarang = DB::select('select * from barangs where id = ?', [$id]);

        return response()->json($detailBarang);
    }

    public function createBarang(Request $request){
        $insert = DB::insert('insert into barangs (id,nama_barang,jumlah_barang,harga_barang,image) values (?,?,?,?,?)', [$request->input('id'),$request->input('nama_barang'),$request->input('jumlah_barang'),$request->input('harga_barang'),$request->input('image')]);

        return response()->json(['status'=>$insert,'data'=>$request->all()]);
    }

    public function updateBarang(Request $request,$id){
        $update = DB::update('UPDATE `barangs` SET `nama_barang`=?,`jumlah_barang`=?,`harga_barang`=?,`image`=? WHERE `id`=?', [$request->input('nama_barang'),$request->input('jumlah_barang'),$request->input('harga_barang'),$request->input('image'),$id]);

        return response()->json(['status'=>$update,'data'=>$request->all()]);
    }

    public function deleteBarang($id){
        $delete = DB::delete('delete from barangs where id = ?', [$id]);

        return response()->json(['status'=>$delete]);
    }
}
