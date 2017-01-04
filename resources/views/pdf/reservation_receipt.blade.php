<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    body {
      font-family: "Open Sans", "Arial", "Calibri", sans-serif;
      font-size: 12px;
    }

    .header p {
      margin: 5px;
    }

    th {
      background: #eee;
    }

    table,
    th,
    td {
      border: 1px solid #000;
      padding: 5px;
    }
  </style>
</head>
<body>
  <div class="header" style="display: inline-block; width: 100%">
    <div>
      <p><strong>Somerset Homeowners Association</strong></p>
      <p><strong>B18 L22 Barrington, Somerset Ave, Pasig, Metro Manila</strong></p>
      <p><strong>(02) 470-0040</strong></p>
      <p><strong>somersetplace@gmail.com</strong></p>
      <p><strong>Receipt</strong></p>
    </div>
  </div>
  <hr>
  <div>
    <strong>Reservation Referrence #: {{sprintf("%'.07d\n", $receipt->reservation_id)}}</strong>
  </div>
  <div style="display: inline-block; width: 100%">
    <div style="float: left;">
      <strong>Receipt #: {{ sprintf("%'.07d\n", $receipt->id) }}</strong>
    </div>
  </div>
  <br><br>
  <div>
    <table>
      <tr>
        <th><strong>Payee Information</strong></th>
      </tr>
      <tr>
        <td>Name: {{ $receipt->reservation->homeOwner->first_name }} {{ $receipt->reservation->homeOwner->middle_name }} {{ $receipt->reservation->homeOwner->last_name }}</td>
      </tr>
      <tr>
        <td>Address: {{ $receipt->reservation->homeOwner->member_address }} </td>
      </tr>
      <tr>
        <td>Contact Number: {{ $receipt->reservation->homeOwner->member_mobile_no }}</td>
      </tr>
      <tr>
        <td>Email Address: {{ $receipt->reservation->homeOwner->member_email_address }}</td>
      </tr>
    </table>
  </div>
  <br><br>
  <div>
    <table width="100%">
      <tr>
        <th width="30%"><strong>Amenity Reserved:</strong></th>
        <td>{{ $receipt->reservation->facility->amenity }}</td>
      </tr>
      <tr>
        <th width="30%"><strong>Reservation Date:</strong></th>
        <td>{{ date('F d, Y', strtotime($receipt->reservation->reservation_date)) }}</td>
      </tr>
      <tr>
        <th width="30%"><strong>Time Reserved:</strong></th>
        <td>{{ date('h:i A', strtotime($receipt->reservation->reservation_date)) . ' - ' . date('h:i A', strtotime('+' . $receipt->reservation->number_of_hours . ' hours', strtotime($receipt->reservation->reservation_date))) }}</td>
      </tr>
      <tr>
        <th width="30%"><strong>Date Paid:</strong></th>
        <td>{{ date('F d Y', strtotime($receipt->created_at)) }}</td>
      </tr>
      <tr>
        <th width="30%"><strong>Amount Paid:</strong></th>
        <td>PHP {{ $receipt->amount_paid }}</td>
      </tr>
    </table>
  </div>
</body>
</html>