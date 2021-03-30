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
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">NISN</label>
                  <input type="text" name="nisn" class="form-control" id="exampleInputEmail1" placeholder="Enter nisn">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">NIS</label>
                  <input type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Enter nis">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">nama</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Enter nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Kelas</label>
                  <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                  <select name="id_kelas" id="id_kelas" class="form-control">
                    <option>-- pilih --</option>
                    @foreach($kelas as $row)
                    <option value="{{$row->id}}">{{$row->id}} - {{$row->nama_kelas}} - {{$row->kompetensi_keahlian}}</option>
                    @endforeach
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat" placeholder="alamat">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Telp</label>
                  <input type="text" name="nomor_telp" class="form-control" id="nomor_telp" placeholder="nomor_telp">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Spp</label>
                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                  <select name="id_spp" id="id_spp" class="form-control">
                    <option >-- pilih --</option>
                    @foreach($spp as $row)
                    <option value="{{$row->id}}">{{$row->tahun}} - {{$row->nominal}}</option>
                    @endforeach
                  </select>
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