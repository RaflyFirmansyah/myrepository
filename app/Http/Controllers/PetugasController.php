<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PetugasController extends Controller
{
	public function index()
	{
		$data_petugas = \App\Petugas::all();
    	return view('petugas.index',['data_petugas'=> $data_petugas]);
	}

	public function create(Request $request)
	{
		\App\Petugas::create($request->all());
		return redirect ('/petugas')->with('sukses','Data Berhasil Diinput');
	}

	public function	edit($id_petugas)
	{
		$petugas = \App\Petugas::find($id_petugas);
		return	view('petugas/edit',['petugas'=> $petugas]);
	}

		public function update(Request $request){
    		$petugas = DB::table('petugas')->where('id_petugas',$request->id_petugas)->update([
    			'id_petugas' =>$request->id_petugas,
    			'username' =>$request->username,
    			'password' =>$request->password,
    			'nama_petugas' =>$request->nama_petugas,
    			'id_level' =>$request->id_level
    		]);
    			return redirect('/petugas')->with('sukses','Data Berhasil Diupdate');
	}

		public function	delete($id_petugas)
	{
		$petugas = \App\Petugas::find($id_petugas);
		$petugas->delete($petugas);
		return redirect('/petugas')->with('sukses','Data Berhasil Dihapus');
	}
}
