@extends('layouts.template')
@section('content')
<meta name="_token" content="{{csrf_token()}}" />
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Fees Master Table  </h3>
              <h3>Total Fees Collection </h3>
              <div class="form-group">
                <label> Select Range </label>
    
                <div class="input-group date" id="dp3"> 
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="start_date"  class="form-control pull-right" id="startdate">
                  
                </div>
                <div class="input-group date" id="dp4"> 
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="valid_till"  class="form-control pull-right" id="valid_till">
                    
                  </div>
                <!-- /.input group -->
                <!-- GET Values -->
                <button id="get"> SUBMIT </button> <br>
                {{-- <button id="clear"> CLEAR </button> <br> --}}
                <p id="totalfees"     style="text-align: center">   </p>
              </div>
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
              <table class="table table-hover" id="location">
                
                <tr>
                  <th> Name </th> 
                  <th> Course Name </th>
                  <th>Duration </th>
                  <th>Fees Amount </th>
                  <th>Valid Till </th>
                </tr>
                <tr>
              
                  
                </tr>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    
    <script>

          var startdate;
          var valid_till;

          


       $('#dp3').datepicker({
                autoclose: true
        })
        $('#dp4').datepicker({
                autoclose: true
        })

                $('#dp3').datepicker().on('changeDate', function (ev) {



                          $('#startdate').change();


                });
                      $('#startdate').val('0000-00-00');
                $('#startdate').change(function () {
                          console.log($('#startdate').val());

                           startdate = $('#startdate').val();



                          


                  });
                  $('#dp4').datepicker().on('changeDate', function (ev) {



                          $('#valid_till').change();


                  });
                          $('#valid_till').val('0000-00-00');


                          $('#valid_till').change(function () {



                          console.log($('#valid_till').val());

                          valid_till = $('#valid_till').val();






                    });

                   


                      $('#get').click(function(){



                      $.ajax({


                                  url: "{{ route('admin.getTotalFees') }}",
                                  method: 'get',
                                  data: {
                                    start_date : startdate,
                                    valid_till :valid_till
                                    
                                  },
                                  success: function(result){


                                    console.log(result);
                                    var data = JSON.parse(result);
                                  var result1 = data.getFees;
                                  var result2 = data.getTotal;
                                    console.log(result1);
                                    console.log(result2);
                                    var trHTML = '';
                
                                    $.each(result1, function (i, item) {
                                        
                                        trHTML += '<tbody id="tabledata"><tr><td>' + result1[i]['name'] + '</td><td><span class="label label-success">' + result1[i]['course_name'] + '</span></td><td>' + result1[i]['duration'] + '</td></td><td>' + result1[i]['fee_amount'] + '</td></td><td>' + result1[i]['valid_till'] + '</td></tr></tbody>';
                                    });
        
                                     
                                    $('#location').html(trHTML);
                                    $('#totalfees').html('Total Fees Collection is INR ' + result2['0']['total']);
                                    

                                  //  $('#totalfees').val(result['0']['total']);
                                    //$('.alert').show();
                                 //   $('.alert').html(result.success);


                                  },
                                  error: function (data) {
                                    
                                    console.log(data);
                                    console.log('Error:', data);
                                    
                                    }
                  
                                });         
                      });


                       $('#clear').click(function(e){

                         e.preventDefault();
                          $('#tabledata').remove();


                        })

    
        
  
    
    
    </script>
    
    


@endsection