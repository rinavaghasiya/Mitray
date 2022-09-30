@extends('admin.header-footer')
@section('content')
<html>
<body>
        <div class="content-body">
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
                               <h3>Contact Detail</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONENO</th>
                                            <th>COMMENTS</th>
                                            <th>REMOVE</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $data=App\Contact::get();?>
                                        @foreach($data as $ans)
                                        <tr>
                                            <td>{{$ans->id}}</td>
                                            <td>{{$ans->name}}</td>
                                            <td>{{$ans->email}}</td>
                                            <td>{{$ans->mobile}}</td>
                                            <td>{!! nl2br($ans->comments) !!} </td>
                                            <td><a href="deletecontact/{{ $ans->id}}"><i class="mdi mdi-close"></i></a></td>

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