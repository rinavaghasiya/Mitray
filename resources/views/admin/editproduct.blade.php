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
                                <form class="form-horizontal" action="{{ url('editproduct')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                    <input type="hidden" name="id" id="id" value="{{$product->id}}">
                                        <label for="">Category Name:</label>
                                        <select class="form-control" id="cname" name="cname">
                                            @foreach($data as $catagory)
                                            <option value="{{ $catagory->id }}" {{ $product->cid == $catagory->id ? "selected" : "" }}>{{ $catagory->cname }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Title:</label>
                                        <input type="text" class="form-control input-default" placeholder="Title..." name="title" value="{{$product->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price:</label>
                                        <input type="text" class="form-control input-default " placeholder="Price..." name="price" value="{{$product->price}}">
                                    </div>

                                    <label for="">Description:</label>
                                    <div class="form-group">
                                        <textarea class="summernote" name="description" id="description">{{$product->description}}</textarea>
                                    </div>

                                    <label for="">Product Image:</label>
                                    <input type="hidden" name="oldimg" id="oldimg" value="{{ $product->pimage }}">
                                    <div class="input-group mb-3">
                                    <input type="file" class="custom-file-input" name="img[]" value="{{$product->pimage}}">
                                            <label class="custom-file-label">Choose file</label>
                                    <br><br>
                                    <img id="blah" src="{{ url('item_img') }}/{{ $product->pimage }}" alt="" height="100" width="100"/>
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

</body>

</html>
@endsection