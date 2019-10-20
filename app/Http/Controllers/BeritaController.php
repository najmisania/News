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
		DB::table('berita')->insert([
			'judul' => $request->judulberita,
			'sub_judul' => $request->subjudulberita,
			'kategori' => $request->kategori,
			'ringkasan' => $request->ringkasan,
			'isi' => $request->isiberita,
	
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/history');
		}
}
