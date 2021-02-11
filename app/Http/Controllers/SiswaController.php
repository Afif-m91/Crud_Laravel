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
            'No_Telpon' => 'required'
        ]);

        Siswa::create([
    		'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'Nis' => $request->Nis,
            'No_Telpon' => $request->No_Telpon
         	]);
 
    	return redirect('/siswa');
    }
}
