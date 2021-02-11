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
                    <label>Jenis Kelamin</label>
                    <input type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis Kelamin Siswa ..">
                        @if($errors->has('Jenis_Kelamin'))
                            <div class="text-danger">
                                {{ $errors->first('Jenis_Kelamin')}}
                            </div>
                        @endif
                </div>
                <div class="form-group">
                    <label>Nama Orang Tua</label>
                    <input type="text" name="Nama_OrangTua" class="form-control" placeholder="Nama OrangTua Siswa ..">
                        @if($errors->has('Nama_OrangTua'))
                            <div class="text-danger">
                                {{ $errors->first('Nama_OrangTua')}}
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
                    <label>Foto</label>
                    <input type="text" name="Foto" class="form-control" placeholder="Foto Siswa ..">
                        @if($errors->has('Foto'))
                            <div class="text-danger">
                                {{ $errors->first('Foto')}}
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