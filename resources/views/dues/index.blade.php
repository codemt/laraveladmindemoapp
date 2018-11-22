@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Dues Master </h3>

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
              <th> Actions </th>
              {{-- <th>  Action </th> --}}
            </tr>
            @foreach($dues as $value)
            <tr>
            <td> {{ $value->id }}</td>
              <td>{{ $value->student_name }}</td>
              <td> <a href="{{ url('admin/dues/delete/'.$value->id) }}"> <i class="fas fa-trash-alt"></i> </a> </td>
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