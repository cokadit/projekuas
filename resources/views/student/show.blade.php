@extends('layouts.template')
@section('title','Detail ' . $student->nama)
@section('judulhalaman','Siswa')

@section('content')
    
    <div class="col-12">
    <a class="btn btn-warning mb-4" href="{{route('student.index')}}">Kembali</a>
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Detail {{$student->nama}}</h3>

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
                        Nama : {{$student->nama}}
                    </li>
                    <li>
                        Umur : {{$student->umur}}
                    </li>
                    <li>
                        Telp : {{$student->telp}}
                    </li>
                    <li>
                        Alamat : {{$student->alamat}}
                    </li>
                    <li>
                        Agama : {{$student->agama}}
                    </li>
                    <li>
                        Jenis Kelaminn : {{$student->jk}}
                    </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>


@endsection
