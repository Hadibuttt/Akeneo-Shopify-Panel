<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order List</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
      
<table class="table table-striped" style="border: 1px solid black;">
  
  <tr style="border: 1px solid black;">
    <td style="border: 1px solid black;background-color:grey;">Order#</td>
    <td style="border: 1px solid black;background-color:grey;">Date</td>
    <td style="border: 1px solid black;background-color:grey;">Customer</td>
    <td style="border: 1px solid black;background-color:grey;">Total</td>
    <td style="border: 1px solid black;background-color:grey;">Payment</td>
    <td style="border: 1px solid black;background-color:grey;">Fullfillment</td>
    <td style="border: 1px solid black;background-color:grey;">Items</td>
  </tr>
  
  <tbody style="border: 1px solid black;">


    <tr style="border: 1px solid black;">
    <td style="border: 1px solid black;">22</td>
    <td style="border: 1px solid black;">24/9/20</td>
    <td style="border: 1px solid black;">Hadi Butt</td>
    <td style="border: 1px solid black;">$10</td>
    <td style="border: 1px solid black;">Paid</td>
    <td style="border: 1px solid black;">Fullfilled</td>
    <td style="border: 1px solid black;">1</td>
    </tr>
    
      <tr style="border: 1px solid black;">
      <td style="border: 1px solid black;">23</td>
      <td style="border: 1px solid black;">25/9/20</td>
      <td style="border: 1px solid black;">Hannan Butt</td>
      <td style="border: 1px solid black;">$23</td>
      <td style="border: 1px solid black;">Paid</td>
      <td style="border: 1px solid black;">Fullfilled</td>
      <td style="border: 1px solid black;">3</td>
      </tr>
    
  </tbody>
</table>

</body>
</html>