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
                    <li><a href="#">Table</a></li>
                    {{-- <li class="active">Basic</li> --}}
                </ol>
              </div>
          </div>
      </div>
  </div>

  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Table</strong>
                        <div style="float:right">
                          <a href="{{url('material/create')}}"><button class="btn btn-md btn-success">Create</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="coba">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th>Id</th>
                              <th>Produk Desc</th>
                              <th>Material Code</th>
                              <th>Code Jenis Produk</th>
                              <th>Nama Jenis Produk</th>
                              <th>Group Produk</th>
                              <th>Group Produk Desc</th>
                              <th>Active</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="material">

                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div><!-- .animated -->
  </div><!-- .content -->

@endsection
