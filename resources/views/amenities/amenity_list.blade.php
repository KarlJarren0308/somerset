@extends('master_layout.master_page_layout')

@section('content')
  <div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><i class="fa fa-building"></i> Amenities</h3>
        </div>
    </div>
    <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of All Amenities</h2>
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
                    <th>Amenity</th>
                    <th>Rent Price per Hour</th>
                    <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($amenities as $amenity)
                  <tr>
                    <td>{{ $amenity->amenity }}</td>
                    <td>₱{{ $amenity->rent_price_per_hour }}</td>
                    <td align="center">
                      <!-- <a href="{{ route('amenities.edit', $amenity->id) }}" role="button" class="btn btn-default">
                        <i class="fa fa-pencil"></i> 
                      </a> -->
                      {!! Form::model($amenities, ['method' => 'DELETE', 'action' => ['amenities\AmenitiesController@destroy', $amenity->id] , 'class' => 'form-horizontal form-label-left form-wrapper']) !!}
                          <button type="submit" class="btn btn-default" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i> </button>
                      {!! Form::close() !!}
                    </td>
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