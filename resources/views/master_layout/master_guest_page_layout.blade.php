<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Somerset Homeowners Management System | </title>

    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png')}}">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="{{ URL::asset('vendors/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ URL::asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Daterangepicker -->
    <link rel="stylesheet" href="{{URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('css/custom.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('guestdashboard')}}" class="site_title"><i class="fa fa-home"></i> <span>Somerset Accounting System</span></a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{route('guestdashboard')}}"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                  <li><a href="{{route('guesttransactionhistory')}}"><i class="fa fa-clock-o"></i> Transaction History </a></li>
                  <li><a href="{{route('guestpendingpayments')}}"><i class="fa fa-money"></i> Pending Payments </a></li>
                  <li>
                    <a><i class="fa fa-map-marker"></i> Reservations <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="{{ route('guestreserve') }}">Create New Reservation</a></li>
                       <li><a href="{{ route('guestreservations') }}">View All Reservations</a></li>
                    </ul>
                  </li>
                  <!--li><a href="#"><i class="fa fa-user"></i> My Profile </a></li-->
                  <!--li><a href="{{route('map.somerset')}}"><i class="fa fa-dashboard"></i> Somerset Map </a></li-->
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <!--a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a-->
              <a href="#" data-toggle="tooltip" data-placement="top" title="FullScreen" onclick="toggleFullScreen();">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true" ></span>
              </a>
              <script type="text/javascript">
                function toggleFullScreen() {
                  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
                   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                    if (document.documentElement.requestFullScreen) {  
                      document.documentElement.requestFullScreen();  
                    } else if (document.documentElement.mozRequestFullScreen) {  
                      document.documentElement.mozRequestFullScreen();  
                    } else if (document.documentElement.webkitRequestFullScreen) {  
                      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
                    }  
                  } else {  
                    if (document.cancelFullScreen) {  
                      document.cancelFullScreen();  
                    } else if (document.mozCancelFullScreen) {  
                      document.mozCancelFullScreen();  
                    } else if (document.webkitCancelFullScreen) {  
                      document.webkitCancelFullScreen();  
                    }  
                  }  
                }
                
              </script>
              <!--a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a-->
              <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    @if(Auth::user()->home_owner_id != NULL)
                      {{Auth::user()->homeOwner->first_name}} {{Auth::user()->homeOwner->last_name}} 
                    @else
                      {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    @endif
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('users.show',Auth::user()->id)}}"> Profile</a></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <!--a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a-->
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @include('flash::message')
          @yield('content')
          <div class="clearfix"></div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
              Somerset Accounting System
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>  

   <!-- jQuery -->
  <script src="{{ URL::asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{ URL::asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{ URL::asset('vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{ URL::asset('vendors/nprogress/nprogress.js')}}"></script>
  <!-- Data Tables -->
  <script src="{{ URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- bootstrap-daterangepicker -->
<script src="{{ URL::asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{ URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- Custom Theme Scripts -->
  <script src="{{ URL::asset('js/custom.js')}}"></script>
    
  <script>
    $(document).ready(function(){
        $('#datatable').dataTable();
        $('#flash-overlay-modal').modal();
    });
  </script>

  <script>
    function padZeros(number, length) {
      var output = number.toString();

      while(output.length < length) {
        output = '0' + output;
      }

      return output;
    }

    $(document).ready(function() {
      if(isInReservation != null && $('#amenity').val() != '') {
        $('#numberOfHours').val('');
        
        var rentPrice = $('#amenity option:selected').data('price');
        var rentHours = $('#amenity option:selected').data('hours');
        var numberOfHours = $('#numberOfHours').val();

        $('.a_c').remove();
        $('#amountCalc > tbody').prepend('<tr class="a_c"><th>Downpayment: </th><td>PHP ' + (((rentPrice * numberOfHours) / rentHours) / 2).toFixed(2) + '</td></tr><tr class="a_c"><th class="text-center">' + moment($('#reservationDate').val()).format('MMM. DD, YYYY') + '</th><td>PHP ' + (((rentPrice * numberOfHours) / rentHours) / 2).toFixed(2) + '</td></tr>');
        $('#totalReservationAmount').text('PHP ' + ((rentPrice * numberOfHours) / rentHours));

        $('#numberOfHours').attr('min', rentHours).attr('step', rentHours);
      }

      $('.datepicker').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_1"
      });

      $('#amenity').change(function() {
        $('#numberOfHours').val('');

        var rentPrice = $('#amenity option:selected').data('price');
        var rentHours = $('#amenity option:selected').data('hours');
        var numberOfHours = $('#numberOfHours').val();

        if($(this).val() != '') {
          $('.a_c').remove();
          $('#amountCalc > tbody').prepend('<tr class="a_c"><th>Downpayment: </th><td>PHP ' + (((rentPrice * numberOfHours) / rentHours) / 2).toFixed(2) + '</td></tr><tr class="a_c"><th class="text-center">' + moment($('#reservationDate').val()).format('MMM. DD, YYYY') + '</th><td>PHP ' + (((rentPrice * numberOfHours) / rentHours) / 2).toFixed(2) + '</td></tr>');
          $('#totalReservationAmount').text('PHP ' + ((rentPrice * numberOfHours) / rentHours));

          $('#numberOfHours').attr('min', rentHours).attr('step', rentHours);
        }
      });

      $('#numberOfHours').on('keyup change', function() {
        var rentPrice = $('#amenity option:selected').data('price');
        var rentHours = $('#amenity option:selected').data('hours');
        var numberOfHours;

        if($('#numberOfHours').val() % rentHours == 0) {
          numberOfHours = $('#numberOfHours').val();

          if($('#amenity').val() != '') {
            $('.a_c').remove();
            $('#amountCalc > tbody').prepend('<tr class="a_c"><th>Downpayment: </th><td>PHP ' + (((rentPrice * numberOfHours) / rentHours) / 2).toFixed(2) + '</td></tr><tr class="a_c"><th class="text-center">' + moment($('#reservationDate').val()).format('MMM. DD, YYYY') + '</th><td>PHP ' + (((rentPrice * numberOfHours) / rentHours) / 2).toFixed(2) + '</td></tr>');
            $('#totalReservationAmount').text('PHP ' + ((rentPrice * numberOfHours) / rentHours));
          }
        } else {
          alert('Number of Hours should be at least ' + rentHours + ' hour(s).');

          $(this).val('').focus();
        }
      });

      $('#reservationDate').change(function() {
        var rentPrice = $('#amenity option:selected').data('price');

        if($(this).val() != '') {
          $('#amountCalc > tbody > .a_c:nth-child(2) > th').text(moment($(this).val()).format('MMM. DD, YYYY'));
        }
      });

      $('#createReservationBtn').click(function() {
        //Retrieving token for request
        var _token = $('meta[name="csrf-token"]').attr('content');

        var reservationDate = $('#reservationDate').val();
        var reservationTime = $('#reservationTime').val();
        var numberOfHours = $('#numberOfHours').val();
        var homeOwnerId = $('#homeowner').val();
        var amenityId = $('#amenity option:selected').val() != '' ? $('#amenity option:selected').val() : '';
        var rentPrice = $('#amenity option:selected').data('price') != undefined ? $('#amenity option:selected').data('price') : '';
        var rentHours = $('#amenity option:selected').data('hours') != undefined ? $('#amenity option:selected').data('hours') : '';
        var dueDate = reservationDate.split('/');

        dueDate = new Date(Date.parse(dueDate[1] + '/' + dueDate[0] + '/' + dueDate[2]));

        if(dueDate >=  new Date().setDate(new Date().getDate()-1)) {
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': _token
            },
            url: '/reservations',
            type: 'POST',
            data: {
              'homeOwnerId': homeOwnerId,
              'amenityId': amenityId,
              'rentPrice': rentPrice,
              'rentHours': rentHours,
              'numberOfHours': numberOfHours,
              'reservationDate': reservationDate,
              'reservationTime': reservationTime
            },
            success: function(response) {
              location.href = "/guest-reservations/"; // + response;
            },
            error: function(xhr, ajaxOptions, thrownError) {
              if(xhr.status == 422) {
                var xhrResponseText = JSON.parse(xhr.responseText);

                $('.xhr-container').html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="xhr-content"></div></div>').promise().done(function() {
                  Object.keys(xhrResponseText).map(function(key) {
                    $('.xhr-container .xhr-content').append('* ' + xhrResponseText[key] + '<br>');
                  });
                });
                $('div.alert').not('.alert-important').delay(3000).slideUp(300);
              } else {
                alert(xhr.status);
                alert(thrownError);
              }
            }
          });
        } else {
          alert('Payment Due Date must be greater than or equal today');
        }
      });
    });
  </script>
  </body>
</html>