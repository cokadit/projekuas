@extends('layouts.template')
@section('title','Halaman Guru')
@section('judulhalaman','Guru')

@section('content')
   <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Guru</h3>
              <a class="btn btn-success float-right" href="{{route('teacher.create')}}" >Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Telp</th>
                  <th>Mata Pelajaran</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Jenis Kelamin</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($teacher as $t)
                <tr>
                    <td>{{$t->nama}}</td> 
                    <td>{{$t->umur}}</td> 
                    <td>{{$t->telp}}</td> 
                    <td>{{$t->matapelajaran}}</td> 
                    <td>{{$t->alamat}}</td> 
                    <td>{{$t->agama}}</td> 
                    <td>{{$t->jk}}</td> 
                    <td>
                        <a href="{{route('teacher.show',$t) }}" class="btn btn-success"><ion-icon name="eye-outline"></ion-icon></a>
                        <a href="{{route('teacher.edit',$t)}}" class="btn btn-info"><ion-icon name="pencil-outline"></ion-icon></a>
                        <form action="{{route('teacher.destroy',$t->id)}}" method="POST" class="float-left mr-1 deleteform" id="deleteform">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-icon btn-danger delete" title="Delete" id="delete"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </td> 
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col --> 
@endsection

@section('script')

<script src="{{asset('adminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection