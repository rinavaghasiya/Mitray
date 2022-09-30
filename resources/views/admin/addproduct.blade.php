@extends('admin.header-footer')
@section('content')
<html>

<body>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">ADD PRODUCT</h4>
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
                                <form class="form-horizontal" action="{{ url('insertproduct')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Category Name:</label>
                                        <select class="form-control" id="cname" name="cname">
                                            @foreach($data as $catagory)
                                            <option value="{{$catagory->id}}">{{$catagory->cname}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title:</label>
                                        <input type="text" class="form-control input-default " placeholder="Title..." name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price:</label>
                                        <input type="text" class="form-control input-default " placeholder="Price..." name="price">
                                    </div>

                                    <label for="">Description:</label>
                                    <div class="form-group">
                                        <textarea class="summernote" name="description" id="description"></textarea>
                                    </div>

                                    <label for="">Product Image:</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="img[]" multiple onchange="readURL(this);">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <br>
                                    <img id="blah" src=" "  width="150px"/>

                                    <br><br>
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