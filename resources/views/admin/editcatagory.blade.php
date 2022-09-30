@extends('admin.header-footer')
@section('content')
<html>
<body>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ADD CATEGORY</h4>
                    </div>
                  
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('message') !!}
                        </div>
                        @elseif(Session::has('error'))
                        <div class="alert alert-danger">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('error') !!}
                        </div>
                        @endif

                    <div class="card-body">

                        <div class="basic-form">
                             <form class="form-horizontal" action="{{ url('editcategory')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                                    <label for="">Category Name:</label>
                                    <input type="text" name="cname" class="form-control input-default "  value="{{ $data->cname}}" placeholder="Category Name...">
                                </div>

                                <label for="">Product Image:</label>
                                    <input type="hidden" name="oldimg" id="oldimg" value="{{ $data->catimage }}">
                                    <div class="input-group mb-3">
                                    <input type="file" class="custom-file-input" name="img" id="imgInp" value="{{$data->catimage}}">
                                            <label class="custom-file-label">Choose file</label>

                                    <br><br>
                                    <img id="blah" src="{{ url('item_img') }}/{{ $data->catimage }}" alt="" height="100" width="100" />
                                    </div>


                                <button type="submit" class="btn btn-primary mb-2">SUBMIT</button>
                                <button type="submit" class="btn btn-primary mb-2">CANCEL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type ="text/javascript">

function readURL(input, imgControlName) 
        {
          if (input.files && input.files[0]) 
          {
            var reader = new FileReader();
            reader.onload = function(e) 
            {
             
              $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }

    $("#imgInp").change(function() {
      var imgControlName = "#blah";
      readURL(this, imgControlName);
    
    });


</script>
</body>
</html>
@endsection
