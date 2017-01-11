@extends('master_layout.master_page_layout')

@section('content')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="">
    <div class="page-title">
       <div class="title_left">
          <h3><i class="fa fa-building"></i> Amenity</h3>
       </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Create New Amenity</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li class="pull-right">
              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="xhr-container form-group" align="center">
          </div>
          <section class="content invoice">
            <!-- title row -->
            <div class="row">
               <div class="col-xs-12 invoice-header">
                  <h4><span class="pull-right">Date: {{ date('m/d/y') }}</span></h4>
               </div>
               <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                <label class="control-label" for="homeowner">Amenity</label>
                <div class="form-group">
                  <input id="amenity" class="form-control" type="text">
                </div>
              </div>
              <div class="col-sm-4 invoice-col">
                <label class="control-label" for="homeowner">Rent Price</label>
                <div class="form-group">
                  <input id="rentPrice" class="form-control" min="1" type="number">
                </div>
              </div>
              <div class="col-sm-4 invoice-col">
                <label class="control-label" for="homeowner">Rent Hours</label>
                <div class="form-group">
                  <input id="rentHours" class="form-control" min="1" type="number">
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <button class="btn btn-success pull-right" id="createAmenityBtn"><i class="fa fa-credit-card"></i> Create Amenity</button>
                <a href="{{ route('amenities.index') }}" class="btn btn-primary pull-right" style="margin-right: 5px;">Cancel</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <script>
    var isInReservation = false;
  </script>
@endsection