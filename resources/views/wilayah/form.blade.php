@extends('_layouts.default')

@section('content')
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Wilayah</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Wilayah</a></li>
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
                <label for="alamat" class=" form-control-label">Sales Office</label>
                <input type="text" id="sales_office" name="sales_office" placeholder="sales_office" class="form-control">
                <label for="alamat" class=" form-control-label">Sales Office Desc</label>
                <input type="text" id="sales_office_desc" name="sales_office_desc" placeholder="sales_office_desc" class="form-control">
                <label for="alamat" class=" form-control-label">Code Kabupaten</label>
                <input type="text" id="code_kabupaten" name="code_kabupaten" placeholder="code_kabupaten" class="form-control">
                <label for="alamat" class=" form-control-label">Kabupaten</label>
                <input type="text" id="Kabupaten" name="Kabupaten" placeholder="Kabupaten" class="form-control">
                <label for="alamat" class=" form-control-label">Sales Group</label>
                <input type="text" id="sales_group" name="sales_group" placeholder="sales_group" class="form-control">
                <label for="alamat" class=" form-control-label">Code Kecamatan</label>
                <input type="text" id="code_kecamatan" name="code_kecamatan" placeholder="code_kecamatan" class="form-control">
                <label for="alamat" class=" form-control-label">Kecamatan</label>
                <input type="text" id="Kecamatan" name="Kecamatan" placeholder="Kecamatan" class="form-control">
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
