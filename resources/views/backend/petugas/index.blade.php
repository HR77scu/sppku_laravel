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
                    <a href="{{route('petugas.create')}}"><button class=" btn btn-primary">Create</button></a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <!-- <th>Password</th> -->
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($users as $row)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->username}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->level}}</td>
                  <td>
                    <a href="{{route('petugas.edit',[$row->id])}}"><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i>Edit</button></a>
                    <a href="{{url('petugas/destroy/'.$row->id)}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</button></a>
                  </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Email</th>
                  <!-- <th>Password</th> -->
                  <th>Level</th>
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