@extends('layouts.template')
@section('content')
<meta name="_token" content="{{csrf_token()}}" />
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              {{-- <h3 class="box-title">  Fee Collections  </h3> --}}
              <h3>Total Fees Collection </h3>
             
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                
                <tr>
                  <th> Name </th> 
                  <th> Course Name </th>
                  <th>Duration </th>
                  <th>Fees Amount </th>
                  <th>Valid Till </th>
                </tr>
                @foreach($fees as $value)
                <tr>
                  <td>{{ $value->name }}</td>
                  <td><span class="label label-success">{{ $value->course_name }}</span></td>
                  <td>{{ $value->duration }}</td>
                  <td>{{ $value->fee_amount }}</td>
                  <td>{{ $value->valid_till }}</td>
                
                </tr>
                @endforeach

                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    
    <script>

    
    </script>
    
    


@endsection