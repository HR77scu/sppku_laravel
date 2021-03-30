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
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <div class="row">
                @foreach($history as $row)
                <div class="col-md-3">
                <div class="form-group">
            <p>
            
            siswa - XII
<br>
{{$row->nisn}} - {{$row->nama_siswa}}
<br>
Nominal SPP Rp.{{$row->id_spp}}
<br>
Bayar Rp.{{$row->jumlah_bayar}}

            </p>

            </div>
                </div>
                @endforeach
            </div>
            </div>
            
          </div>
          <!-- /.box -->



        </div>
        <!--/.col (left) -->

      </div>
      <!-- /.row -->
    </section>

@endsection