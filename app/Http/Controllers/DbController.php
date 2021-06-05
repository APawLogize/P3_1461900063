<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index()
    {
    	$barang = DB::table('barang')->get();
 
    	return view('dbbarang0063',['barang' => $barang]);
    }

    public function edit($id)
    {    
        $pelanggan = DB::table('barang')->where('id', $id)->get(); return view('edit0039', ['barang' => $pelanggan]);
    }

    public function update(Request $request) 
    {
        DB::table('barang')->where('id', $request->id) ->update([ 'nama' => $request->nama,   
        'harga' => $request->harga ]);
        return redirect('/barang');
    }

    public function store (Request $request) 
    { 
    DB::table('barang')->insert([
    'id' => $request->id,
    'nama' => $request->nama,
    'harga' => $request->harga,]);
    
    return redirect('/barang');
    }

    public function hapus ($id)
    {
    DB::table('barang')->where('id', $id)->delete(); 
    return redirect('/barang');
    }

    public function cari(request $request)
    {
        $barang = $request->lihat;
        $barang = DB::table('barang')->where('nama','like',"%".$barang."%")->paginate();
        return view('dbbarang0063',['barang'=>$barang]);
    }
}
