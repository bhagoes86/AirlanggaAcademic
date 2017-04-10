<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
   protected $table = 'prestasi';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'prestasi', 
		'tahun_kegiatan',
		'kelompok_kegiatan',
		'jenis_kegiatan',
		'penyelenggara',
		'tingkat',
		'file_prestasi',	
   ];
}