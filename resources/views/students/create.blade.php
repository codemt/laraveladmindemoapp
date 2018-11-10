
@extends('layouts.template')
<meta name="_token" content="{{csrf_token()}}" />
@section('content')
<form  class="container">
          
        <fieldset>
        <legend>New Student Admission Form </legend>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
              <label for="exampleInputEmail1">Enter Full Name </label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter First Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Course Name </label>
            <select class="form-control" id="course_name" name="course_name">
            </select>    
      </div>
        <div class="form-group">
          <label for="exampleInputEmail1"> Personal Email address</label>
          <input type="email" class="form-control" name="student_email" id="student_email" aria-describedby="emailHelp" placeholder="Enter email" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1"> Personal Mobile No.</label>
              <input type="text" class="form-control" name="student_mobile" id="student_mobile" aria-describedby="emailHelp" placeholder="Enter Mobile No." style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
        <div class="form-group">
              <label for="exampleInputEmail1"> Parent Email address</label>
              <input type="email" class="form-control" name="parent_email" id="parent_email" aria-describedby="emailHelp" placeholder="Enter Parent Email." style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1"> Parent Mobile No.</label>
              <input type="text" class="form-control" name="parent_mobile" id="parent_mobile" aria-describedby="emailHelp" placeholder="Enter Parent Mobile No." style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
              <label for="exampleInputEmail1"> Address </label>
              <input type="text" class="form-control" name="address"  id="address" aria-describedby="emailHelp" placeholder="Enter Address." style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Upload Image </label>
          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>
        <button  id="submit" type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
        </form>

        @section('scripts')
        <script>
     
           $(document).ready(function(){


                   $.ajax({


                                          url: "{{ route('admin.courses.fetch') }}",
                                          method: 'get',
                                          success: function(result){


                                          console.log(result);

                                          var trHTML;
                                          $.each(result, function (i, item) {
                                                
                                                trHTML += '<option>' + result[i]['course_name'] + '</option>';
                                          });

                                          $('#course_name').append(trHTML);




                                          },
                                          error: function (data) {

                                          console.log(data);
                                          console.log('Error:', data);

                                          }

                        }); 



                 $('#submit').click(function(e){


                        e.preventDefault();


                         toastr.clear();
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


                       let name;
                       let course_name;
                       let student_email;
                       let student_mobile;
                       let parent_email;
                       let parent_mobile;
                       let address;

                       console.log('clicked');

                        $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            });

                           



                          $.ajax({

                              url: "{{ route('admin.students.store') }}",
                              method: 'post',
                              //data: $(this).serialize(),
                              data: {

                                    name : $('#name').val(),
                                    course_name :  $('#course_name').val(),
                                    student_email :  $('#student_email').val(),
                                    student_mobile :  $('#student_mobile').val(),
                                    parent_email :  $('#parent_email').val(),
                                    parent_mobile :  $('#parent_mobile').val(),
                                    address :  $('#address').val(),
                              },
                              success: function(result)
                              {
                                    toastr.success('New Admission Done');
                                    window.location.href = '{{ route("admin.students") }}'; 
                                    //$('#textarea').summernote('code','<!DOCTYPE html><html> <head></head> <body> <div style="text-align: center;width: 100%;font-family: open sans;max-width: 580px;float: none;margin: 0 auto;border: 1px solid #686868 ;padding-top: 30px;display: inline-block;"> <div style="padding: 0px;text-align: center;display: inline-block;float: left;width:calc(100% - 40px);padding: 0 20px;border-box: box-sizing;"> <!-- <div style="margin-bottom: 20px;"><img src="http://wowffers.com/backend/images/wowffersLogo.png" alt="logo"></div> --> <div> <div style="padding: 0 20px;margin-bottom: 20px;"> <div> <h2 style="margin: 0 auto;font-size: 18px;margin-bottom: 10px;font-weight: normal;text-align: left;"><b>Dear '+ result +'</b></h2> </div> </div> <div style="padding: 0 20px;"> <div> <div style="font-size: 20px;margin-bottom: 10px;">Your registration for ERP access is successful!</div> </div> </div> <div style="padding: 0 20px;"> <div> <div style="font-size: 16px;margin-bottom: 10px;">Your login credentials are. </div> </div> </div> <div style="background-color: #0d4a83;color: #ffffff;font-size: 18px;padding: 20px;width: 100%;display: inline-block;box-sizing: border-box;"> <div style="margin-bottom: 4px;"><strong>Name: </strong></div> <div style="margin-bottom: 4px;"><strong>Email: </strong></div> <div style="margin-bottom: 4px;"><strong>Password: </strong></div> </div> <div style="padding: 0 20px 20px;"> <div> <div style="font-size: 18px;margin: 25px auto 0 ;line-height: 26px;">There is link to login: <a href="">Click here</a></div> </div> </div> <div style="padding: 0 20px 20px;"> <div> <div style="font-size: 18px;margin: 25px auto 0 ;line-height: 26px;"> Please write to us on email <a href="mailto:marketing@wowffers.com" style="text-decoration:none;color: #e52534;">admin@gmail.com</a><br/>or call us on <a href="tel:1234567890" style="text-decoration:none;color: #e52534;">1234567890 / </a><a href="tel:1234567890" style="text-decoration:none;color: #e52534;">1234567890</a>for your login issues.</div> </div> </div> <div style="padding: 0 20px;margin-bottom: 20px;"> <div> <h2 style="margin: 0 auto;font-size: 18px;margin-bottom: 10px;font-weight: normal;text-align: left;"><b>Regards </b><br><br> Triton Process Automation Pvt Limited<br> Swastik Disha Corporate Park, 613-615, 6th Floor<br> L.B.S. Marg, Opposite shreyas Cinema<br> Ghatkopar(W), Mumbai – 400086<br> Tel. : 022 2500 1900<br> nirav@tritonprocess.com <br> www.tritonprocess.com</h2> </div> </div> </div> </div> </div> </body></html>');
                              
                                                                  
                              },
                              error: function (data) 
                              {


                                    var errors = data.responseJSON.errors;
                                    console.log(data.responseJSON.errors);

                                    var values = Object.values(errors);
                                    console.log(values);



                                    for(var i=0;i<values.length;i++){

                                          toastr.error(values[i]);

                                    }
                                    

                                    // for each (var item in errors) {
                                    //         //  toastr.error(responseJson); 
                                    // }
                                    // errors.forEach(function(error) {
                                          
                                    //       toastr.error(error); 
                                    // });
                              
                                                                  
                              }
                        });






                 });
     
                   
         
     
     
           });
       </script>

@stop

@endsection