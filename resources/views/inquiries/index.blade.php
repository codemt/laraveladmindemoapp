@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Inquiries Master </h3>

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
              <th>ID</th>
              <th>Name</th>
              <th>Course Name  </th>
              <th> Mobile </th>
              <th> Email </th>
              <th>  Created at </th>
              {{-- <th>  Action </th> --}}
            </tr>
            @foreach($inquiries as $inquiry)
            <tr>
            <td> {{ $inquiry->id }}</td>
              <td>{{ $inquiry->name }}</td>
              <td><span class="label label-success">{{$inquiry->course_name}}</span></td>
              <td>{{ $inquiry->mobile }}</td>
              <td>{{ $inquiry->email }}</td>
              <td>{{ $inquiry->created_at }}</td>
              {{-- <td> <a href="{{ url('admin/students/edit/'.$inquiry->id) }}"> <i class="fas fa-trash-alt"></i> </a> </td> --}}
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