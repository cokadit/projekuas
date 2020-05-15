@extends('layouts.template')
@section('title','Edit ' . $student->nama)
@section('judulhalaman','Siswa')

@section('content')
    <!-- general form elements -->
        <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Form Edit Data {{$student->nama}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('student.update',$student)}}" method="POST">
              @csrf
              @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="exampleInputEmail1" name="nama" value="{{$student->nama ?? old('nama')}}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Umur</label>
                        <input type="text" class="form-control @error ('umur') is-invalid @enderror" id="exampleInputEmail1" name="umur" value="{{$student->umur ?? old('umur')}}">
                        @error('umur')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telpon</label>
                        <input type="text" class="form-control @error ('telp') is-invalid @enderror" id="exampleInputEmail1" name="telp" value="{{$student->telp ?? old('telp')}}">
                        @error('telp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control @error ('alamat') is-invalid @enderror" id="exampleInputEmail1" name="alamat" value="{{$student->alamat ?? old('alamat')}}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select class="form-control @error ('agama') is-invalid @enderror" name="agama" value="{{$student->agama ?? old('agama')}}">
                            <option value="Hindu" {{$student->agama == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                            <option value="Islam" {{$student->agama == 'Islam' ? 'selected' : ''}}>Islam</option>
                            <option value="Kristen" {{$student->agama == 'Kristen' ? 'selected' : ''}}>Kristen</option>
                            <option value="Budha" {{$student->agama == 'Budha' ? 'selected' : ''}}>Budha</option>
                            <option value="Kong Hu Chu" {{$student->agama == 'Kong Hu Chu' ? 'selected' : ''}}>Kong Hu Chu</option>
                        </select>
                        @error('agama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control @error ('jk') is-invalid @enderror" name="jk" value="{{$student->jk ?? old('jk')}}">
                          <option value="Laki-Laki" {{$student->jk == 'LakiLaki' ? 'selected' : ''}}>Laki-Laki</option>
                          <option value="Perempuan" {{$student->jk == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
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
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>

@endsection