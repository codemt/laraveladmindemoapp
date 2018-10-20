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
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class="box table table-hover">
                   
                  <tr>
                    <th>Monday Batch </th>
                  </tr>
                  @foreach(json_decode($monday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>
              



        </div>
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class=" box table table-hover">
                   
                  <tr>
                    <th>Tuesday Batch </th>
                  </tr>
                  @foreach(json_decode($tuesday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>

        </div>
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class=" box table table-hover">
                   
                  <tr>
                    <th>Wednesday Batch </th>
                  </tr>
                  @foreach(json_decode($wednesday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>

        </div>
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class=" box table table-hover">
                   
                  <tr>
                    <th>Thursday Batch </th>
                  </tr>
                  @foreach(json_decode($thursday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>

        </div>
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class=" box table table-hover">
                   
                  <tr>
                    <th>Friday Batch </th>
                  </tr>
                  @foreach(json_decode($friday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>

        </div>
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class=" box table table-hover">
                   
                  <tr>
                    <th>Satuday Batch </th>
                  </tr>
                  @foreach(json_decode($saturday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>

        </div>
        <div class="box-body  col-md-2">

            <div class="box-body table-responsive no-padding">
                <table class=" box table table-hover">
                   
                  <tr>
                    <th>Sunday Batch </th>
                  </tr>
                  @foreach(json_decode($sunday,true) as $value)
                  <tr>  
                     
                   
                         <td> {{ $value }}</td>
                       
                  </tr> 
                  @endforeach   
                </table>
              </div>

        </div>
       
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>



@endsection