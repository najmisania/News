<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
	protected $table = "jadwal";
	protected $fillable = ['nama_kegiatan','tanggal','jam','lokasi','reminder','jenis_kegiatan'];
}
