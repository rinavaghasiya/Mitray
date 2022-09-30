<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h2> Product Detail</h2><br>
    <table id="example" class="display" style="min-width: 845px">
        <thead>
            <tr style="color: red;">
                <th scope="col">ID</th>
                <th scope="col">CATEGORY NAME</th>
                <th scope="col">TITLE</th>
                <th scope="col">PRICE</th>
                <th scope="col">DATE</th>


            </tr>
        </thead>
        <tbody>
            @foreach($data as $ans)
            <tr>
                <td>{{$ans->id}}</td>
                <td>{{$ans->cname}}</td>
                <td>{{$ans->title}}</td>      
                <td>{{$ans->price}}</td>
                <td>{{$ans->cretaed_at}}</td>
            </tr>
            @endforeach

        </tbody>

    </table>

</body>

</html>