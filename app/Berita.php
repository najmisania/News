<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
	protected $table = "berita";
	protected $fillable = ['judul','sub_judul','kategori','ringkasan','isi'];
}
