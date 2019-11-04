<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jadwal;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
	public function index()
	{
		$jadwal = DB::table('jadwal')->get();
    	// mengirim data jadwal ke view index
    	return view('jadwal.index',['jadwal'=> $jadwal]);
	}

	public function tambah()
	{
		return view('jadwal.tambah');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'nama_kegiatan' => 'required',
			'tanggal' => 'required',
			'jam' => 'required',
			'lokasi' => 'required',
			'reminder' => 'required',
			'jenis_kegiatan' => 'required'
		]);
		Jadwal::create([
			'nama_kegiatan' => $request->nama_kegiatan,
			'tanggal' => $request->tanggal,
			'jam' => $request->jam,
			'lokasi' => $request->lokasi,
			'reminder' => $request->reminder,
			'jenis_kegiatan' => $request->jenis_kegiatan,
		]);
		// alihkan halaman ke halaman jadwal
		return redirect('jadwal')->with('status', 'Event berhasil ditambahkan.');
	}
}
