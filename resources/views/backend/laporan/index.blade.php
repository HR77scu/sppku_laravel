@extends('layouts.global')
@section('content')


    <!-- Content Header (Page header) -->
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

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Different Height</h3>
            </div>
            <div class="box-body">
            <div class="row">
      <div class="col-md-12">
      
         <div class="card">
            <div class="card-body">
               <div class="card-title"> Buat Laporan</div>
               
                  <div class="alert alert-warning">Buat laporan pembayaran SPP siswa, semua data siswa akan di rekap dan di buat laporannya.</div>
                       
                  <a href="{{ url('laporan/create') }}" class="btn btn-primary btn-rounded">Buat Laporan</a>
                                
            </div>
         </div>
      
      </div> 
   </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

@endsection