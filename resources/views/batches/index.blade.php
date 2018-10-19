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
              <th> Tuesday Batch </th>
              <th> Wednesday Batch </th>
              <th> Thursday Batch </th>
              <th> Friday Batch </th>
              <th> Saturday Batch </th>
              <th> Sunday Batch </th>
            </tr>
            @foreach(json_encode($mondaybatches['Monday'],true) as $value['Monday'])
            <tr>
              
                   <td> {{ $value }}</td>
           
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