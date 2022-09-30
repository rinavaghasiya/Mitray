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
                <div class="row">

                
                    <div class="col-12">
                        <div class="card">
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

                        
                            <div class="card-header">
                                <button type="submit" class="btn btn-primary mb-2"><a href="{{url ('addcatagory')}}">ADD CATEGORY</a> </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CATEGORY NAME</th>
                                                <th>CATEGORY IMAGE</th>
                                                <th>MODIFY</th>
                                                <th>REMOVE</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $ans)
                                            <tr>
                                                <td>{{$ans->id}}</td>
                                                <td>{{$ans->cname}}</td>
                                                <td><img class="thumbnail no-margin"  src=" {{url('item_img')}}/{{ $ans->catimage}}" height="100px" width="100px"></td>
                                                <td><a href="editcategory/{{ $ans->id}}"><i class="mdi mdi-pencil"></i></a></td>
                                                <td><a href="deletecatagory/{{ $ans->id}}"><i class="mdi mdi-close"></i></a></td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
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