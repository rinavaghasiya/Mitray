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
                            <div class="card-header">
                                <button type="submit" class="btn btn-primary mb-2"><a href="{{url ('addproduct')}}">ADD PRODUCT</a> </button>
                                <button type="submit" class="btn btn-primary mb-2"><a href="{{url('downloadPDF')}}">Export PDF</a> </button>
                               
                                <button type="submit" class="btn btn-primary mb-2"> <a href="{{url('export-excel-csv-file/csv')}}">Export CSV</a></button>
                            </div>
                         
                            <div class="card-body">
                                <div class="table-responsive">
                            

                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CATEGORY NAME</th>
                                                <th>TITLE</th>
                                                <th>PRICE</th>
                                                <th>DATE</th>
                                                <th>PRODUCT IMAGE</th>
                                                <th>MODIFY</th>
                                                <th>REMOVE</th>
                                                <th>Add Image</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $ans)
                                            <tr>
                                                <td>{{$ans->id}} </td>
                                                <td>{{$ans->cname}}</td>
                                                <td>{{$ans->title}}</td>
                                                <td>{{$ans->price}}</td>
                                                <td>{{$ans->cretaed_at}}</td>
                                                <td>  @php $a =explode(",",$ans->pimage);@endphp
                                                <img class="thumbnail no-margin" data-toggle="modal" data-target="#scrollmodal{!! $ans->id !!}" src=" {{url('item_img')}}/{{ $a[0]}}" height="100px" width="100px"></td>
                                                
                                                <td><a href="editproduct/{{ $ans->id}}"><i class="mdi mdi-pencil"></i></a></td>
                                                <td><a href="deleteproduct/{{ $ans->id}}"><i class="mdi mdi-close"></i></a></td>
                                                <td><button type="submit" class="btn btn-primary mb-2"><a href="{{url ('addimage')}}/{{$ans->id}}">Add Image</a> </button></td>
                                            
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
        <!--**********************************
            Content body end
        ***********************************-->

        <script type="text/javascript">
	function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  	for (i = 0; i < tr.length; i++)
	{
		td = tr[i].getElementsByTagName("td");
		 tr[i].style.display = "none";
		 
		 for(j=0;j<td.length;j++)
		 {
            
	      if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1)
	      {
	        tr[i].style.display = "";
	      } 
               
         }
	}
 
}
</script>
</body>
</html>
@endsection