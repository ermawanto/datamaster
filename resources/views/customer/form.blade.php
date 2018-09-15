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
                <label for="alamat" class=" form-control-label">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control">
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
