<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Berita;

class BeritaController extends Controller
{
	public function index()
	{
		$berita = Berita::all();
		return view('/history/index', compact('berita'));
	}

	public function tambah()
	{
		return view('/upload/index');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'judul' => 'required',
			// 'sub_judul' => 'required',
			// 'kategori' => 'required',
			// 'ringkasan' => 'required',
			// 'isi' => 'required',
		]);

		$test = Berita::create([
			'judul' => $request->judul,
			'sub_judul' => $request->sub_judul,
			'kategori' => $request->kategori,
			'ringkasan' => $request->ringkasan,
			'isi' => $request->isi,
		]);
		dd($test);
		// return redirect('/history/index');
	}
}
