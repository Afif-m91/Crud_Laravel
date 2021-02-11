@extends('layouts.app')
@section('content')

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pegawai - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
            </div>
            <div class="card-body">
                <a href="/siswa" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                

                <form method="post" action="/siswa/update/{{ $siswa->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="Nama" class="form-control" placeholder="Nama Siswa .." value=" {{ $siswa->Nama }}">

                        @if($errors->has('Nama'))
                            <div class="text-danger">
                                {{ $errors->first('Nama')}}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <textarea type="text" name="Nis" class="form-control" placeholder="Nis Siswa ..">{{ $siswa->Nis }} </textarea>
                            @if($errors->has('Nis'))
                                <div class="text-danger">
                                    {{ $errors->first('Nis')}}
                                </div>
                            @endif
                        </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                            <textarea type="text" name="No_Telpon" class="form-control" placeholder="No Telpon Orang Tua siswa ..">{{ $siswa->No_Telpon}} </textarea>
                                @if($errors->has('No_Telpon'))
                            <div class="text-danger">
                                    {{ $errors->first('No_Telpon')}}
                            </div>
                              @endif
                    </div>    
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <textarea type="text" name="Jenis_Kelamin" class="form-control" placeholder="Jenis Kelamin Siswa .."> {{ $siswa->Jenis_Kelamin}} </textarea>
                            @if($errors->has('Jenis_Kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('Jenis_Kelamin')}}
                                </div>
                            @endif
                    </div>
                    <div class="form-group">
                        <label>Nama Orang Tua</label>
                        <textarea type="text" name="Nama_OrangTua" class="form-control" placeholder="Nama OrangTua Siswa ..">{{ $siswa->Nama_OrangTua}} </textarea>
                            @if($errors->has('Nama_OrangTua'))
                                <div class="text-danger">
                                    {{ $errors->first('Nama_OrangTua')}}
                                </div>
                            @endif
                    </div>    
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="Alamat" class="form-control" placeholder="Alamat Siswa .."> {{ $siswa->Alamat }} </textarea>
                         @if($errors->has('Alamat'))
                            <div class="text-danger">
                                {{ $errors->first('Alamat')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <textarea type="text" name="Foto" class="form-control" placeholder="Foto Siswa ..">{{$siswa->Foto}} </textarea>
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