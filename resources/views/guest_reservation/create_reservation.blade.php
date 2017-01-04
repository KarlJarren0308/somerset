@extends('master_layout.master_guest_page_layout')

@section('content')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="">
    <div class="page-title">
       <div class="title_left">
          <h3><i class="fa fa-map-marker"></i> Reservation</h3>
       </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Create New Reservation</h2>
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
              <div class="col-sm-8 invoice-col">
                <label class="control-label" for="homeowner">Reserved By</label>
                <div class="form-group">
                  <input id="homeowner" class="form-control" value="{{ Auth::user()->homeOwner->id }}" type="hidden" readonly>
                  <input id="cashier" class="form-control" value="{{ Auth::user()->homeOwner->first_name }} {{ Auth::user()->homeOwner->last_name }}" type="text" readonly>
                </div>
              </div>
              <div class="col-sm-4 invoice-col">
                <label class="control-label" for="homeowner">Number of Hours</label>
                <div class="form-group">
                  <input id="numberOfHours" class="form-control" value="1" min="1" max="24" type="number">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-3 invoice-col">
                <label class="control-label" for="homeowner">Reservation Date:</label>
                <div class="form-group">
                  <input id="reservationDate" class="datepicker form-control" type="text">
                </div>
              </div>
              <div class="col-sm-3 invoice-col">
                <label class="control-label" for="homeowner">Reservation Time:</label>
                <div class="form-group">
                  <input id="reservationTime" class="form-control " type="time">
                </div>
              </div>
              <div class="col-sm-6 invoice-col">
                <label class="control-label" for="">Amenity:</label>
                <div class="form-group">
                  <select id="amenity" class="select2_single form-control" tabindex="-1">
                    <option></option>
                    @foreach($amenities as $amenity)
                      <option value="{{ $amenity->id }}" data-price="{{ $amenity->rent_price_per_hour }}">{{ $amenity->amenity }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
              <div class="col-xs-6 pull-right">
                <p class="lead">Amount Due</p>
                <div class="table-responsive">
                  <table class="table" id="amountCalc">
                    <tbody>
                      <tr class="amountCalcInfo"></tr>
                      <tr>
                        <th>Total: </th>
                        <td id="totalReservationAmount">PHP 0.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-xs-12">
                <button class="btn btn-success pull-right" id="createReservationBtn"><i class="fa fa-credit-card"></i> Create Reservation</button>
                <a href="{{ route('reservations.index') }}" class="btn btn-primary pull-right" style="margin-right: 5px;">Cancel</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  <script>
    var isInReservation = true;
  </script>
@endsection