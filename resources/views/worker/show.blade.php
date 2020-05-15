@extends('layouts.template')
@section('title','Detail ' . $worker->nama)
@section('judulhalaman','Siswa')

@section('content')
    
    <div class="col-12">
    <a class="btn btn-warning mb-4" href="{{route('worker.index')}}">Kembali</a>
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Detail {{$worker->nama}}</h3>

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
                        NIP : {{$worker->nip}}
                    </li>
                    <li>
                        Nama : {{$worker->nama}}
                    </li>
                    <li>
                        Umur : {{$worker->umur}}
                    </li>
                    <li>
                        Telp : {{$worker->telp}}
                    </li>
                    <li>
                        Alamat : {{$worker->alamat}}
                    </li>
                    <li>
                        Agama : {{$worker->agama}}
                    </li>
                    <li>
                        Jenis Kelaminn : {{$worker->jk}}
                    </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </div>


@endsection
