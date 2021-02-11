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

}
