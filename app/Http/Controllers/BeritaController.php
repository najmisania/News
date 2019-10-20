<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Berita;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
	public function index()
	{
		$berita = DB::table('berita')->get();

    	// mengirim data pegawai ke view index
    	return view('history.index',['berita' => $berita]);
	}

	public function tambah()
	{
		return view('upload.index');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'judul' => 'required',
			'sub_judul' => 'required',
			'kategori' => 'required',
			'ringkasan' => 'required',
			'isi' => 'required',
		]);

		$test = Berita::create([
			'judul' => $request->judul,
			'sub_judul' => $request->sub_judul,
			'kategori' => $request->kategori,
			'ringkasan' => $request->ringkasan,
			'isi' => $request->isi,
		]);
		
		return redirect('/history/index');
	}
}
