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
                <h4>Reservation #: {{ sprintf("%'.07d\n", $reservation->id) }}</h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              @if($reservation->user->home_owner_id == NULL)
                <div class="col-sm-6 invoice-col">
                  <div class="form-group">
                    <label for="" class="control-label">Cashier</label>
                    <h5>
                      {{ $reservation->user->first_name }} {{ $reservation->user->middle_name }} {{ $reservation->user->last_name }}
                    </h5>
                  </div>
                </div>
                <div class="col-sm-6 invoice-col">
                  <div class="form-group">
                    <label class="control-label" for="homeowner">To</label>
                    <h5>{{ $reservation->homeOwner->first_name }} {{ $reservation->homeOwner->middle_name }} {{ $reservation->homeOwner->last_name }}</h5>
                  </div>
                </div>
                <!-- /.col -->
              @else
                <div class="col-sm-12 invoice-col">
                  <div class="form-group">
                    <label class="control-label" for="homeowner">To</label>
                    <h5>{{ $reservation->homeOwner->first_name }} {{ $reservation->homeOwner->middle_name }} {{ $reservation->homeOwner->last_name }}</h5>
                  </div>
                </div>
                <!-- /.col -->
              @endif
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Amenity Reserved</th>
                      <th>Reservation Date</th>
                      <th>Time Reserved</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $reservation->facility->amenity }}</td>
                      <td>{{ date('F d, Y', strtotime($reservation->reservation_date)) }}</td>
                      <td>{{ date('h:i A', strtotime($reservation->reservation_date)) . ' - ' . date('h:i A', strtotime('+' . $reservation->number_of_hours . ' hours', strtotime($reservation->reservation_date))) }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->

              <div class="col-xs-12 pull-right">
                <p class="lead">Amount Due</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th width="60%">Total:</th>
                        <td>₱{{ $reservation->reservation_amount }}</td>
                        <th></th>
                      </tr>
                      <?php $totalAmountPaid = 0; ?>
                      @foreach($reservation->receipts as $receipt)
                        <?php $totalAmountPaid += $receipt->amount_paid; ?>
                        <tr>
                          <th width="60%">Amount paid last {{ date('F d, Y', strtotime($receipt->created_at)) }}:</th>
                          <td>₱{{ $receipt->amount_paid }}</td>
                          <td class="text-center">
                            <a href="/reservations/receipt/{{ $receipt->id }}" role="button" class="btn btn-primary" title="Settle Payment" target="_blank"><i class="fa fa-print"></i></a>
                          </td>
                        </tr>
                      @endforeach()

                      @if($reservation->reservation_amount != $totalAmountPaid)
                        <tr>
                          <th width="60%">Balance:</th>
                          <td>₱{{ number_format($reservation->reservation_amount - $totalAmountPaid, 2) }}</td>
                          <td></td>
                        </tr>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- this row will not appear when printing -->
          </section>
        </div>
      </div>
    </div>
  </div>
@endsection