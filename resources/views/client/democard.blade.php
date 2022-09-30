<!DOCTYPE html>
<html>

<head>
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;

    }

    .price {
      color: grey;
      font-size: 22px;
    }

    .card .buttoncls {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }
  </style>
</head>

<body>
  <button id="button2">Hide</button><button id="button3">Show</button>
  <h2 style="text-align:center">Product Card</h2>


  <div class="card" id="div1">
    <img src="{{url('image/1649403432blue-lehnga.jpg')}}" alt="Denim Jeans" style="width:100%">
    <h1>Tailored Jeans</h1>
    <p class="price">$19.99</p>
    <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button class="buttoncls">Add to Cart</button></p>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#button2").click(function() {
        $("#div1").hide();
      });
      $("#button3").click(function() {
        $("#div1").show();
      });
    });
  </script>


</body>

</html>