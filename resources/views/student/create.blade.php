@extends('layouts.template')
@section('title','Tambah Data Siswa')
@section('judulhalaman','Siswa')

@section('content')
    
    <!-- general form elements -->
        <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('student.store')}}" method="POST">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control  @error ('nama') is-invalid @enderror" id="exampleInputEmail1" name="nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Umur</label>
                        <input type="text" class="form-control  @error ('umur') is-invalid @enderror" id="exampleInputEmail1" name="umur">
                        @error('umur')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telpon</label>
                        <input type="text" class="form-control  @error ('telp') is-invalid @enderror" id="exampleInputEmail1" name="telp">
                        @error('telp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control  @error ('alamat') is-invalid @enderror" id="exampleInputEmail1" name="alamat">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control  @error ('agama') is-invalid @enderror" name="agama">
                          <option value="Hindu">Hindu</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Budha">Budha</option>
                          <option value="Kong Hu Chu">Kong Hu Chu</option>
                        </select>
                        @error('agama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control  @error ('jk') is-invalid @enderror" name="jk">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan" >Perempuan</option>
                        </select>
                        @error('jk')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>

@endsection