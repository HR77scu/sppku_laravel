@extends('layouts.global')
@section('content')


<section class="content-header">
      <h1>
        Data Kelas
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Kelas</h3>
                <div class="col-md-offset-11 col-md-1">
                    <a href="{{route('kelas.create')}}"><button class=" btn btn-primary">Create</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Kopetensi keahlian</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($kelas as $row)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$row->nama_kelas}}</td>
                  <td>{{$row->kompetensi_keahlian}}</td>
                  <td>
                    <a href="{{route('kelas.edit',[$row->id])}}"><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i>Edit</button></a>
                    <a href="{{url('kelas/destroy/'.$row->id)}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</button></a>
                  </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Kopetensi keahlian</th>
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