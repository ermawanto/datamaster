@extends('_layouts.default')

@section('content')
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Plantsloc</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Plantsloc</a></li>
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
                <label for="alamat" class=" form-control-label">Code Plant</label>
                <input type="text" id="code_plant" name="code_plant" placeholder="code_plant" class="form-control">
                <label for="alamat" class=" form-control-label">Nama Plant</label>
                <input type="text" id="nama_plant" name="nama_plant" placeholder="nama_plant" class="form-control">
                <label for="alamat" class=" form-control-label">Code Storage Location</label>
                <input type="text" id="code_storage_location" name="code_storage_location" placeholder="code_storage_location" class="form-control">
                <label for="alamat" class=" form-control-label">Nama Storage Location</label>
                <input type="text" id="nama_storage_location" name="nama_storage_location" placeholder="nama_storage_location" class="form-control">
                <label for="alamat" class=" form-control-label">Code Shipping Point</label>
                <input type="text" id="code_shipping_point" name="code_shipping_point" placeholder="code_shipping_point" class="form-control">
                <label for="alamat" class=" form-control-label">Nama Shipping Point</label>
                <input type="text" id="nama_shipping_point" name="nama_shipping_point" placeholder="nama_shipping_point" class="form-control">
                <label for="alamat" class=" form-control-label">Code Propinsi</label>
                <input type="text" id="code_propinsi" name="active" placeholder="code_propinsi" class="form-control">
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
