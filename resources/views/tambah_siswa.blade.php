@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Siswa - <strong>TAMBAH DATA</strong> 
        </div>
        <div class="card-body">
            <a href="/siswa" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            
            <form method="post" action="/siswa/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" class="form-control" placeholder="Nama siswa ..">
                        @if($errors->has('Nama'))
                            <div class="text-danger">
                                {{ $errors->first('Nama')}}
                            </div>
                        @endif
                </div>

                <div class="form-group">
                    <label>NIS</label>
                    <input type="text" name="Nis" class="form-control" placeholder="Nis siswa ..">
                        @if($errors->has('Nis'))
                            <div class="text-danger">
                                {{ $errors->first('Nis')}}
                            </div>
                        @endif
                </div>
                <div class="form-group">
                    <label>No Telpon</label>
                    <input type="text" name="No_Telpon" class="form-control" placeholder="No Telpon Orang Tua siswa ..">
                        @if($errors->has('No_Telpon'))
                            <div class="text-danger">
                                {{ $errors->first('No_Telpon')}}
                            </div>
                        @endif
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="Alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
                        @if($errors->has('Alamat'))
                            <div class="text-danger">
                                {{ $errors->first('Alamat')}}
                            </div>
                        @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>
@endSection