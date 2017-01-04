@extends('master_layout.master_page_layout')

@section('content')
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-map-marker"></i> Reservations</h3>
        </div>
    </div>
    <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of All Reservations</h2>
              <ul class="nav navbar-right panel_toolbox">
                  <li class="pull-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
              </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>Reserved By</th>
                    <th>Reserved Amenity</th>
                    <th>Reservation Date</th>
                    <th>Reserved Time</th>
                    <th>Reservation Amount</th>
                    <th>Amount Paid</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($reservationList as $reservation)
                  <tr>
                    <td><a href="{{ route('reservations.show',$reservation->id) }}"><strong>#{{ sprintf("%'.07d\n",$reservation->id) }}</strong></a></td>
                    <td>{{ $reservation->homeOwner->first_name }} {{ $reservation->homeOwner->middle_name }} {{ $reservation->homeOwner->last_name }}</td>
                    <td>{{ $reservation->facility->amenity }}</td>
                    <td>{{ date('F d, Y', strtotime($reservation->reservation_date)) }}</td>
                    <td>{{ date('h:i A', strtotime($reservation->reservation_date)) }} - {{ date('h:i A', strtotime('+' . $reservation->number_of_hours . ' hours', strtotime($reservation->reservation_date))) }}</td>
                    <td>₱{{ $reservation->reservation_amount }}</td>
                    <td>₱{{ $reservation->amount_paid }}</td>
                    @if($reservation->is_paid)
                      <td>Fully Paid</td>
                      <td align="center"></td>
                    @else
                      <td>Pending</td>
                      <td>
                        <a href="/reservations/settle/{{$reservation->id}}" role="button" class="btn btn-default" title="Settle Payment">
                          <i class="fa fa-money"></i> 
                        </a>
                        <!-- <a href="{{ route('reservations.edit', $reservation->id) }}" role="button" class="btn btn-default">
                          <i class="fa fa-pencil"></i> 
                        </a> -->
                        {!! Form::model($reservation, ['method'=>'DELETE','action' => ['reservation\ReservationController@destroy',$reservation->id] , 'class' => 'form-horizontal form-label-left form-wrapper']) !!}
                          <button type="submit" class="btn btn-default" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </button>
                        {!! Form::close() !!}
                      </td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
@endsection