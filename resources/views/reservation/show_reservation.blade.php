@extends('master_layout.master_page_layout')

@section('content')
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-files-o"></i> Reservation</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Reservation Details</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <section class="content invoice">
            <!-- title row -->
            <div class="row">
              <div class="col-xs-12 invoice-header">
                <h4>Reservation #: {{ sprintf("%'.07d\n",$reservation->id) }}</h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              @if($reservation->user->home_owner_id == NULL)
                <div class="col-sm-4 invoice-col">
                  <div class="form-group">
                    <label for="" class="control-label">Cashier</label>
                    <h5>
                      {{$reservation->user->homeOwner->first_name}} {{$reservation->user->homeOwner->middle_name}} {{$reservation->user->homeOwner->last_name}}
                    </h5>
                  </div>
                </div>
              @endif
              <div class="col-sm-4 invoice-col">
                <div class="form-group">
                  <label class="control-label" for="homeowner">To</label>
                  <h5>{{reservation->homeOwner->first_name}} {{reservation->homeOwner->middle_name}} {{reservation->homeOwner->last_name}}</h5>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <label class="control-label" for="homeowner">Payment Due:</label>
                <div class="form-group">
                  <h5>{{ date('F d, Y',strtotime(reservation->reservation_date)) }}</h5>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
              <div class="col-md-6">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Amenity</th>
                      <th style="width: 30%">Payment Type</th>
                      <th style="width: 59%">Covering Month/s</th>
                      <th>Amount (PHP)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $pendingPayment->facility->amenity }}</td>
                      <td>{{ $pendingPayment->item->item_name }}</td>
                      <td>{{ $pendingPayment->remarks }}</td>
                      <td>{{ $pendingPayment->amount }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->

              <div class="col-xs-6 pull-right">
                <p class="lead">Amount Due</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th style="width:50%">Total:</th>
                        <td>{{reservation->total_amount}}</td>
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
                {!! Form::open(['url'=>'pdf','method'=>'POST','target'=>'_blank']) !!}
                  @include('pdf.pdf_form',['category'=>'invoice','recordId'=>reservation->id])

                  @if(!reservation->is_paid && Auth::user()->userType->type != 'Guest')
                    <a href="../receipt/create/{{reservation->id}}" role="button" class="btn btn-success pull-right" style="margin-right:5px;"><i class="fa fa-money"></i> Create Receipt</a>
                  @endif
                {!! Form::close() !!}
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection