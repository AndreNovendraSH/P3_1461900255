<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view("home0255");
    }

    public function create(){
        return view("create0255");
    }

    public function update(Request $id){
        $barang = DB::table('barang')->like('barang',$id)->get();
        return view("update0255", ['barang' => $barang]);
    }

    public function read(){
        $barang = DB::table('barang')->get();
 
    	return view('read0255',['barang' => $barang]);
    }

    public function store(Request $request)
    {
	
	DB::table('barang')->insert([
        'id' => $request->id,
		'nama' => $request->nama,
		'harga' => $request->harga,
		
	]);
	
	return redirect('/hal_read');
    
    }

    public function up(Request $request)
{
	
	DB::table('barang')->where('id',$request->id)->update([
		'id' => $request->id,
        'nama' => $request->nama,
		'alamat' => $request->alamat
	]);
	
	return redirect('/hal_read');
}


}