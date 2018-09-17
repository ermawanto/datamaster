@extends('_layouts.default')

@section('content')
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Material</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Material</a></li>
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
                <label for="alamat" class=" form-control-label">Produk Desc</label>
                <input type="text" id="produk_desc" name="produk_desc" placeholder="produk_desc" class="form-control">
                <label for="alamat" class=" form-control-label">Material Code</label>
                <input type="text" id="material_code" name="material_code" placeholder="material_code" class="form-control">
                <label for="alamat" class=" form-control-label">Code Jenis Produk</label>
                <input type="text" id="code_jenis_produk" name="code_jenis_produk" placeholder="code_jenis_produk" class="form-control">
                <label for="alamat" class=" form-control-label">Nama Jenis Produk</label>
                <input type="text" id="nama_jenis_produk" name="nama_jenis_produk" placeholder="nama_jenis_produk" class="form-control">
                <label for="alamat" class=" form-control-label">Group Produk</label>
                <input type="text" id="group_produk" name="group_produk" placeholder="group_produk" class="form-control">
                <label for="alamat" class=" form-control-label">Group Produk Desc</label>
                <input type="text" id="group_produk_desc" name="group_produk_desc" placeholder="group_produk_desc" class="form-control">
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
