@extends('_layouts.default')

@section('content')
  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Dashboard</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Customer</a></li>
                    <li><a href="#">Table</a></li>
                    {{-- <li class="active">Basic</li> --}}
                </ol>
              </div>
          </div>
      </div>
  </div>

  <div class="content mt-3">
    <div class="col-md-12">
      <h1>Customer</h1>
    </div>
  </div>

@endsection
