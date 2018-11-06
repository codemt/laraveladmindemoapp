@extends('layouts.template')
<meta name="_token" content="{{csrf_token()}}" />
@section('content')


<form  class="container">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
  
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
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



                          $('#submit').on('click',function(e){


                                e.preventDefault();
                                  // toastr.clear();
                                  toastr.options = {

                                              timeOut : 0,
                                              extendedTimeOut : 100,
                                              tapToDismiss : true,
                                              debug : false,
                                              fadeOut: 10,
                                              closeButton : true,
                                              newestOnTop : false,
                                              preventDuplicates : true,
                                              positionClass : "toast-top-center"                           


                                  };


                            
                                console.log($('#exampleSelect1').val());
                               // alert('you clicked me');

                               $.ajaxSetup({
                                      headers: {
                                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                      }
                                });


                              
                                $.ajax({

                                            url: "{{ route('admin.attendance.store') }}",
                                            method: 'post',
                                            //data: $(this).serialize(),
                                            data: {

                                                  student_name : $('#exampleSelect1').val(),
                                                  
                                            },
                                            success: function(result)
                                            {
                                                  console.log(result);

                                                  var student_id = result;
                                                  console.log(student_id);

                                                 


                                                        toastr.success('Attendance Recorded Successfully');
                                                        toastr.info('Displaying Total Attendance')
                                                  

                                                  window.setTimeout(function(){


                                                          window.location.assign(student_id);

                                                  },1000);
                                                

                                                //  var url = 'admin/students/attendance/'+student_id;
                                                 // window.location.assign(url);

                                                
                                                 // console.log(window.location);
                                                //  window.location.href = window.location.assign.replace( /[\?#].*|$/, url );
                                               //  window.location.href =  url + student_id;
                                                 
                                                  //$('#textarea').summernote('code','<!DOCTYPE html><html> <head></head> <body> <div style="text-align: center;width: 100%;font-family: open sans;max-width: 580px;float: none;margin: 0 auto;border: 1px solid #686868 ;padding-top: 30px;display: inline-block;"> <div style="padding: 0px;text-align: center;display: inline-block;float: left;width:calc(100% - 40px);padding: 0 20px;border-box: box-sizing;"> <!-- <div style="margin-bottom: 20px;"><img src="http://wowffers.com/backend/images/wowffersLogo.png" alt="logo"></div> --> <div> <div style="padding: 0 20px;margin-bottom: 20px;"> <div> <h2 style="margin: 0 auto;font-size: 18px;margin-bottom: 10px;font-weight: normal;text-align: left;"><b>Dear '+ result +'</b></h2> </div> </div> <div style="padding: 0 20px;"> <div> <div style="font-size: 20px;margin-bottom: 10px;">Your registration for ERP access is successful!</div> </div> </div> <div style="padding: 0 20px;"> <div> <div style="font-size: 16px;margin-bottom: 10px;">Your login credentials are. </div> </div> </div> <div style="background-color: #0d4a83;color: #ffffff;font-size: 18px;padding: 20px;width: 100%;display: inline-block;box-sizing: border-box;"> <div style="margin-bottom: 4px;"><strong>Name: </strong></div> <div style="margin-bottom: 4px;"><strong>Email: </strong></div> <div style="margin-bottom: 4px;"><strong>Password: </strong></div> </div> <div style="padding: 0 20px 20px;"> <div> <div style="font-size: 18px;margin: 25px auto 0 ;line-height: 26px;">There is link to login: <a href="">Click here</a></div> </div> </div> <div style="padding: 0 20px 20px;"> <div> <div style="font-size: 18px;margin: 25px auto 0 ;line-height: 26px;"> Please write to us on email <a href="mailto:marketing@wowffers.com" style="text-decoration:none;color: #e52534;">admin@gmail.com</a><br/>or call us on <a href="tel:1234567890" style="text-decoration:none;color: #e52534;">1234567890 / </a><a href="tel:1234567890" style="text-decoration:none;color: #e52534;">1234567890</a>for your login issues.</div> </div> </div> <div style="padding: 0 20px;margin-bottom: 20px;"> <div> <h2 style="margin: 0 auto;font-size: 18px;margin-bottom: 10px;font-weight: normal;text-align: left;"><b>Regards </b><br><br> Triton Process Automation Pvt Limited<br> Swastik Disha Corporate Park, 613-615, 6th Floor<br> L.B.S. Marg, Opposite shreyas Cinema<br> Ghatkopar(W), Mumbai – 400086<br> Tel. : 022 2500 1900<br> nirav@tritonprocess.com <br> www.tritonprocess.com</h2> </div> </div> </div> </div> </div> </body></html>');

                                                                                
                                            },
                                            error: function (data) 
                                            {


                                                console.log(data);
                                                  // var errors = data.responseJSON.errors;
                                                  // console.log(data.responseJSON.errors);

                                                  // var values = Object.values(errors);
                                                  // console.log(values);



                                                  // for(var i=0;i<values.length;i++){

                                                  //       toastr.error(values[i]);

                                                  // }
                                                  

                                                                                
                                            }


                                    });

                                    



                                


                          });





                 })
              


        </script>


     
@stop


@endsection