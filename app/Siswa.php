<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
    protected $table='siswa';
    protected $fillable =['Nama','Nis','Alamat','No_Telpon','Jenis_Kelamin','Nama_OrangTua','Foto'];
}
