@extends('layouts.global')
@section('content')


<section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
                <div class="col-md-offset-11 col-md-1">
                    <a href="{{route('siswa.create')}}"><button class=" btn btn-primary">Create</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <!-- <th>Password</th> -->
                  <th>Kelas</th>
                  <th>No Telp</th>
                  <th>alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($siswa as $row)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$row->nisn}}</td>
                  <td>{{$row->nisn}}</td>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->id_kelas}}</td>
                  <td>{{$row->nomor_telp}}</td>
                  <td>{{$row->id_spp}}</td>
                  <td>
                    <a href=""><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i>Edit</button></a>
                    <a href=""><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</button></a>
                  </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <!-- <th>Password</th> -->
                  <th>Kelas</th>
                  <th>No Telp</th>
                  <th>alamat</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


@endsection