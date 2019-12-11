<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class C_User extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $result = DB::select('select * from users');
        return response()->json($result);
    }

    public function detailUser($id){
        $detail = DB::select('select * from users where id = ?', [$id]);

        return response()->json($detail);
    }

    public function createUser(Request $request)
    {
        $insert = DB::insert('insert into users (id,name,email,password,api_token) values (?,?,?,?,?)', 
        [$request->input('id'), 
         $request->input('name'),
         $request->input('email'),
         $request->input('password'), 
         $request->input('api_token')
        ]);
        return response()->json(['status'=>$insert,'data'=>$request->all()]);
    }

    public function updateUser(Request $request, $id)
    {
        $update = DB::update('update users SET name = ?, email=?, password=?, api_token=? WHERE id=?', [
                    $request->input('name'),
                    $request->input('email'),
                    $request->input('password'), 
                    $request->input('api_token'),
                    $id
                ]);
        return response()->json(['status'=>$update,'data'=>$request->all()]);
    }

    public function deleteUser($id)
    {
        $delete = DB::delete('delete from users where id = ?', [$id]);
        return response()->json(['status'=>$delete]);
    }
}
