@extends('layouts.template')
<meta name="_token" content="{{csrf_token()}}" />
@section('content')

<form action="{{ route('admin.courses.store') }}" method="post" class="container">
        {{ csrf_field() }}
    <fieldset>
      <legend> Add Courses  </legend>
      <div class="form-group">
        <label for="exampleInputEmail1">Enter Course Name </label>
        <input type="text" class="form-control" name="course_name" id="course_name" aria-describedby="emailHelp" placeholder="Enter Course Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
     
      <button type="submit"  class="btn btn-primary">Submit</button>
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



                   
                       



          


      });
  </script>
    
@stop

   


@endsection