@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Students  Database Table</h3>

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
              <th>Monday Batch </th>
            </tr>
         
            <tr>
              @foreach(json_decode($monday,true) as $value)
                   <td> {{ $value }}</td>
                   @endforeach
            </tr>
            <tr>
              <th>Tuesday Batch </th>
            </tr>
           
            <tr>
                @foreach(json_decode($tuesday,true) as $value)
              
                   <td> {{ $value }}</td>
                   @endforeach
            </tr>
           
              <tr>
                  <th>Thursday Batch </th>
                </tr>
               
                <tr>
                    @foreach(json_decode($thursday,true) as $value)
                  
                       <td> {{ $value }}</td>
                       @endforeach
                </tr>
           
            
            
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>



@endsection