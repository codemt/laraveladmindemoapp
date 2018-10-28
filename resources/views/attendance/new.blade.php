@extends('layouts.template')
@section('content')


<form action="{{ route('admin.attendance.store') }}" method="post" class="container">
        {{ csrf_field() }}
    <fieldset>
    <legend> Record Attendance  </legend>
    <div class="form-group">
        <label>Today's  Date </label>

        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" name="valid_till"  class="form-control pull-right" id="datepicker">
        </div>
        <!-- /.input group -->
      </div>
    <div class="form-group">
      <label for="exampleSelect1"> Select Student Name  </label>
      <select class="form-control" id="exampleSelect1" name="student_name">
       
      </select>
    </div>
     

    
          {{-- <div class="form-group">
                        <label>Valid From </label>
            
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" name="valid_till"  class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div> --}}
  
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>
@section('scripts')
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script>




        
            //Date picker
                $('#datepicker').datepicker({
                autoclose: true
                })

                

                 $(document).ready(function(){ 



                                 $("#datepicker").datepicker().datepicker("setDate", new Date());


                                  $.ajax({


                                  url: "{{ route('admin.getStudentNames') }}",
                                  method: 'get',
                                  success: function(result){


                                    console.log(result);
                                   
                                    var trHTML;
                                    $.each(result, function (i, item) {
                                        
                                        trHTML += '<option>' + result[i]['name'] + '</option>';
                                    });

                                  $('#exampleSelect1').append(trHTML);
                                  
  


                              },
                              error: function (data) {
                                
                                console.log(data);
                                console.log('Error:', data);
                                
                                }

                          }); 





                 })
              


        </script>


     
@stop


@endsection