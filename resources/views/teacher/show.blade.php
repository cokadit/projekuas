@extends('layouts.template')
@section('title','Detail ' . $teacher->nama)
@section('judulhalaman','Siswa')

@section('content')
    
    <div class="col-12">
    <a class="btn btn-warning mb-4" href="{{route('teacher.index')}}">Kembali</a>
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Detail {{$teacher->nama}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul>
                    <li>
                        Nama : {{$teacher->nama}}
                    </li>
                    <li>
                        Umur : {{$teacher->umur}}
                    </li>
                    <li>
                        Telp : {{$teacher->telp}}
                    </li>
                    <li>
                        Mata Pelajaran : {{$teacher->matapelajaran}}
                    </li>
                    <li>
                        Alamat : {{$teacher->alamat}}
                    </li>
                    <li>
                        Agama : {{$teacher->agama}}
                    </li>
                    <li>
                        Jenis Kelaminn : {{$teacher->jk}}
                    </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>


@endsection
