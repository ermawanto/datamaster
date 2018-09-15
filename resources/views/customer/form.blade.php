@extends('_layouts.default')

@section('content')
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Customer</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Customer</a></li>
                    <li><a href="#">Forms</a></li>
                    {{-- <li class="active">Basic</li> --}}
                </ol>
              </div>
          </div>
      </div>
  </div>

  <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
              <div class="form-group">
                <label for="alamat" class=" form-control-label">Kode Customer</label>
                <input type="text" id="kd_customer" name="kode_customer" placeholder="kode customer" class="form-control">
                <label for="alamat" class=" form-control-label">Nama Customer</label>
                <input type="text" id="nama_customer" name="nama_customer" placeholder="nama customer" class="form-control">
                <label for="alamat" class=" form-control-label">Nama Pimpinan</label>
                <input type="text" id="nama_pimpinan" name="nama_pimpinan" placeholder="nama pimpinan" class="form-control">
                <label for="alamat" class=" form-control-label">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
                <label for="alamat" class=" form-control-label">Kode Propinsi</label>
                <input type="text" id="kode_provinsi" name="kode_provinsi" placeholder="kode provinsi" class="form-control">
                <label for="alamat" class=" form-control-label">Kode Kabupaten</label>
                <input type="text" id="kode_kabupaten" name="kode_kabupaten" placeholder="kode kabupaten" class="form-control">
                <label for="alamat" class=" form-control-label">Sales Group</label>
                <input type="text" id="sales_group" name="sales_group" placeholder="sales group" class="form-control">
                <label for="alamat" class=" form-control-label">No Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="no telepon" class="form-control">
                <label for="alamat" class=" form-control-label">NPWP</label>
                <input type="text" id="npwp" name="npwp" placeholder="npwp" class="form-control">
                <label for="alamat" class=" form-control-label">Email</label>
                <input type="text" id="email" name="email" placeholder="email" class="form-control">
                <label for="alamat" class=" form-control-label">Active</label>
                <input type="text" id="active" name="active" placeholder="active" class="form-control">
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" align="right">
            <button type="button" id="kirim" class="btn btn-lg btn-success">Kirim</button>
          </div>
        </div>
      </div><!-- .animated -->
  </div><!-- .content -->

@endsection
