@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
                <h3 class="box-title">{{  $name }}'s Attendance Details   </h3>
                
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
              <th>Name</th>
              <th> Last Attendance </th>
            </tr>
            @foreach($getAttendance as $value)
             <tr>
               <td>{{ $value->student_name }}</td>
               <td>{{ $value->attended_on }}</td>
              </tr>
            @endforeach
            
          </table>   
        </div>
        <!-- /.box-body -->
        <br> 
        <div class="box-body table-responsive no-padding">
            
        <p>  Total Lectures Alloted {{ $totalAlloted }}</p>
      </div>
      <!-- /.box -->
    </div>
  </div>



@endsection