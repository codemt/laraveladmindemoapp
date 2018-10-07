@extends('layouts.template')
@section('content')

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Fees Master Table</h3>
    
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
                @foreach($fees as $fee)
                <tr>
                <td> {{  $fee->name }}</td>
                <td> <span class="label label-success"> {{ $fee->course_name }} </span>  </td>
                <td> {{ $fee->duration  }} </td>
                <td> {{ $fee->fee_amount }} </td>
                <td> {{ $fee->valid_till }} </td> 
                  
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    
    
    
    


@endsection