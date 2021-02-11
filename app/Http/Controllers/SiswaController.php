<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    
    public function index()
    {
        $data ['siswa']= Siswa::All();
        return view('siswa',['siswa'=> $data['siswa']]);
      // return view('admin.home', ['acara' => $data['acara'] ]);
    }

    public function tambah()
    {
        return view('tambah_siswa');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
    		'Nama' => 'required',
            'Alamat' => 'required',
            'Nis' =>'required',
            'No_Telpon' => 'required',
            'Nama_OrangTua'=> 'required'
        ]);

        Siswa::create([
    		'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'Nis' => $request->Nis,
            'Jenis_Kelamin'=> $request->Jenis_Kelamin,
            'No_Telpon' => $request->No_Telpon,
            'Nama_OrangTua' => $request->Nama_OrangTua,
            'Foto' => $request->Foto
         	]);
 
    	return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa_edit', ['siswa' => $siswa]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'Nama' => 'required',
            'Alamat' => 'required',
            'Nis' =>'required',
            'No_Telpon' => 'required',
            'Nama_OrangTua'=> 'required'
        ]);

        $siswa = Pegawai::find($id);
        $siswa->Nama = $request->Nama;
        $siswa->Alamat=  $request->Alamat;
        $siswa->Nis = $request->Nis;
        $siswa->Jenis_Kelamin = $request->Jenis_Kelamin;
        $siswa->No_Telpon = $request->No_Telpon;
        $siswa->Nama_Orangtua = $request->Nama_OrangTua;
        $siswa->Foto =  $request->Foto;
        
        return redirect('/siswa');
    }
}
