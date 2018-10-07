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
              <th>ID</th>
              <th>Name</th>
              <th>Course</th>
              <th>Student Email</th>
              <th>Parent Email</th>
              <th>Student Number</th>
              <th>Parent Number </th>
              <th> Address </th>
            </tr>
            @foreach($students as $student)
            <tr>
            <td> <a href="{{ url('admin/students/edit/'.$student->id) }}"> {{$student->id}} </a> </td>
              <td>{{ $student->name }}</td>
              <td><span class="label label-success">{{$student->course_name}}</span></td>
              <td>{{ $student->student_email }}</td>
              <td>{{ $student->parent_email }}</td>
              <td>{{ $student->student_mobile }}</td>
              <td>{{ $student->parent_mobile }}</td>
              <td>{{ $student->address }}</td>
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