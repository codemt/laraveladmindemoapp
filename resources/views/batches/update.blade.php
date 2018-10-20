@extends('layouts.template')
@section('content')

@if(session('Status'))
<p class="label label-success"> Added Successfully.  </p>
    
@endif

<form action="{{ route('admin.batch.update') }}" method="post" class="container">
        {{ csrf_field() }}
    <fieldset>
    <legend> Update Batch Students </legend>
    <div class="form-group">
      <label for="exampleSelect1"> Select Student Name  </label>
      <select class="form-control" id="exampleSelect1" name="student_name">
       
      </select>
    </div>
      <div class="form-group">
            <label for="exampleInputEmail1">Enter Batch Name </label>
            <select class="form-control" id="batchname" name="batch_name">
       
                </select>
    </div>
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

                          $.ajax({


                                    url: "{{ route('admin.batch.get') }}",
                                    method: 'get',
                                    success: function(result){


                                    console.log(result);
                                    
                                    var trHTML;
                                    $.each(result, function (i, item) {
                                        
                                        trHTML += '<option>' + result[i] + '</option>';
                                    });

                                    $('#batchname').append(trHTML);




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