<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LevelController extends Controller
{
	public function index()
	{
		$data_level = \App\Level::all();
    	return view('level.index',['data_level'=> $data_level]);
	}

	public function create(Request $request)
	{
		\App\Level::create($request->all());
		return redirect ('/level')->with('sukses','Data Berhasil Diinput');
	}

	public function	edit($id_level)
	{
		$level = \App\Level::find($id_level);
		return	view('level/edit',['level'=> $level]);
	}

		public function update(Request $request){
    		$level = DB::table('level')->where('id_level',$request->id_level)->update([
    			'id_level' =>$request->id_level,
    			'nama_level' =>$request->nama_level,
    		]);
    			return redirect('/level')->with('sukses','Data Berhasil Diupdate');
	}

		public function	delete($id_level)
	{
		$level = \App\Level::find($id_level);
		$level->delete($level);
		return redirect('/level')->with('sukses','Data Berhasil Dihapus');
	}
}
