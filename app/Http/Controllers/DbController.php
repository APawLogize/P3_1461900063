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
}
