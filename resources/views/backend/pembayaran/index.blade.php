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
        <li class="active">Pembayaran</li>
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
              <h3 class="box-title">Pembayaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('pembayaran.store')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NISN</label>
                  <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" id="exampleInputEmail1" placeholder="Enter nisn">
                  <span class="text-danger">
                    @error('nisn') {{$message}} @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Spp Bulan</label>
                    <select name="spp_bulan" id="spp_bulan" class="form-control @error('spp_bulan') is_invalid @enderror">
                      <option>-- pilihan --</option>
                      <option value="januari">Januari</option>
                      <option value="februari">Februari</option>
                      <option value="maret">Maret</option>
                      <option value="april">April</option>
                      <option value="mei">Mei</option>
                      <option value="juni">Juni</option>
                      <option value="juli">Juli</option>
                      <option value="agustus">Agustus</option>
                      <option value="september">September</option>
                      <option value="oktober">Oktober</option>
                      <option value="november">November</option>
                      <option value="desember">Desember</option>
                    </select>
                    <span class="text-danger">
                      @error('spp_bulan') {{ $message }} @enderror
                    </span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Bayar</label>
                  <input type="text" class="form-control @error('jumlah_bayar') is-invalid @enderror" name="jumlah_bayar" id="exampleInputPassword1" placeholder="jumlah_bayar">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pembayaran</h3>
            </div>
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th >No</th>
                  <th >PETUGAS</th>
								  <th >NISN SISWA</th>
                  <th >NAMA SISWA</th>
                  <th >SPP</th>
                  <th >JUMLAH BAYAR</th>
                  <th >TANGGAL BAYAR</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($pembayaran as $row)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$row->id_petugas}}</td>
                  <td>{{$row->nisn}}</td>
                  <td>{{$row->nama_siswa}}</td>
                  <td>{{$row->id_spp}}</td>
                  <td>{{$row->jumlah_bayar}} - {{$row->bulan_bayar}}</td>
                  <td>{{$row->tgl_bayar}}</td>
                  
                  <td>
                    <!-- <a href=""><button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i>Edit</button></a> -->
                    <a href="{{url('pembayaran/destroy/'.$row->id)}}"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</button></a>
                  </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th >No</th>
                  <th >PETUGAS</th>
								  <th >NISN SISWA</th>
                  <th >NAMA SISWA</th>
                  <th >SPP</th>
                  <th >JUMLAH BAYAR</th>
                  <th >TANGGAL BAYAR</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>


@endsection