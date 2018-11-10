@extends('layouts.template')
<meta name="_token" content="{{csrf_token()}}" />
@section('content')

<form>
    <fieldset>
      <legend> Generate Invoices  </legend>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <select class="form-control" id="exampleSelect1" name="student_name">
        </select>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleSelect1">Select Template </label>
        <select class="form-control" id="exampleSelect1">
          <option>Fee Receipt </option>
          <option>Attendance </option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleTextarea">Email Body</label>
        {{-- <textarea name="summernoteInput"  id="textarea" class="summernote" rows="3"></textarea> --}}
      </div>
      <button type="submit" id="submit" class="btn btn-primary">Generate</button>
    </fieldset>
  </form>
  @section('scripts')
   <!-- include summernote css/js-->
   <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
   <script>

      $(document).ready(function(){

              
                  $('.summernote').summernote();

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

                         // alert('you clicked me')
                          console.log($('#exampleSelect1').val());


                              $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                }
                            });



                             $.ajax({


                                  url: "{{ route('admin.make.pdf') }}",
                                  method: 'post',
                                  data : {

                                      student_name : $('#exampleSelect1').val()



                                  },
                                  success: function(result){


                                    console.log(result);

                                    window.location = result;

                                  //   var trHTML;
                                  //   $.each(result, function (i, item) {
                                        
                                  //       trHTML += '<option>' + result[i]['name'] + '</option>';
                                  //   });

                                  // $('#exampleSelect1').append(trHTML);




                                  },
                                  error: function (data) {

                                  console.log(data);
                                  console.log('Error:', data);

                                  }


                              }); 





                      });
                       



          


      });
  </script>
    
@stop

   


@endsection