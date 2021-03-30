@extends('layouts.global')
@section('content')


<section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('kelas.update',[$kelas->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kelas</label>
                  <input type="text" name="nama_kelas" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Kelas" value="{{$kelas->nama_kelas}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kopetensi keahlian</label>
                  <input type="text" name="kompetensi_keahlian" class="form-control" id="exampleInputPassword1" placeholder="Enter Kopetensi keahlian" value="{{$kelas->kompetensi_keahlian}}">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </section>


@endsection