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

    	// mengirim data berita ke view index
    	return view('history.index',['berita'=> $berita]);
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
			'isi' => 'required'
		]);
		Berita::create([
			'judul' => $request->judul,
			'sub_judul' => $request->sub_judul,
			'kategori' => $request->kategori,
			'ringkasan' => $request->ringkasan,
			'isi' => $request->isi,

		]);
		// alihkan halaman ke halaman history
		return redirect('history')->with('status', 'Berita berhasil ditambahkan.');
	}

	public function edit($id)
	{
		$berita = Berita::find($id);
		return view('upload.edit', ['berita' => $berita]);
	}

	public function update($id, Request $request)
	{
		$this->validate($request, [
			'judul',
			'sub_judul',
			'kategori',
			'ringkasan',
			'isi',
			'status'
		]);

		$berita = Berita::find($id);
		$berita->judul = $request->judul;
		$berita->sub_judul = $request->sub_judul;
		$berita->kategori = $request->kategori;
		$berita->ringkasan = $request->ringkasan;
		$berita->isi = $request->isi;
		$berita->status = $request->status;
		$berita->save();
		return redirect('history')->with('status', 'Berita berhasil di update.');
	}

	public function lihat_berita($id)
	{
		$berita = Berita::find($id);
		// dd($berita);
		return view('history.lihat', ['berita' => $berita]);
	}

	public function hapus($id)
	{
		$berita = Berita::find($id);
		$berita->delete();
		return redirect('history');
	}
}
