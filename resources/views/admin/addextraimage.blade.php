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
                             <form class="form-horizontal" action="{{ url('addimagedetail')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="pid" id="pid" value="{{ $data->id }}">

                                <label for="">Category Image:</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="productimg" onchange="readURL(this);">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>

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

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


</body>




</html>
@endsection
