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
    <td style="border: 1px solid black;background-color:grey;">TAHUN LKAN</td>
    <td style="border: 1px solid black;background-color:grey;">TARIKH BETANG PARLIMEN</td>
    <td colspan="4" style="border: 1px solid black;background-color:grey;">BETANG PARLIMEN</td>
    <td colspan="4" style="border: 1px solid black;background-color:grey;">STATUS SEHINGGA 31 JULAI 2019</td>
    <td colspan="2" style="border: 1px solid black;background-color:grey;">PETRATUS PENYELEASIAN TINDAKAN</td>
  </tr>
  
  <tbody style="border: 1px solid black;">


    <tr style="border: 1px solid black;">
    <td colspan="2" style="border: 1px solid black;"></td>
    <td style="border: 1px solid black;background-color:red;">TT</td>
    <td style="border: 1px solid black;background-color:yellow;">DT</td>
    <td style="border: 1px solid black;background-color:green;">S</td>
    <td style="border: 1px solid black;background-color:blue;">JUMLAH</td>
    <td style="border: 1px solid black;background-color:red;">TT</td>
    <td style="border: 1px solid black;background-color:yellow;">DT</td>
    <td style="border: 1px solid black;background-color:green;">S</td>
    <td style="border: 1px solid black;background-color:blue;">JUMLAH</td>
    <td style="border: 1px solid black;background-color:green;">SELESAI</td>
    <td style="border: 1px solid black;background-color:yellow;">BELUM SELESAI</td>
    </tr>
    
    <tr style="border: 1px solid black;">
      <td style="border: 1px solid black;">8</td>
      <td style="border: 1px solid black;">8</td>

      <td style="border: 1px solid black;">8</td>
      <td style="border: 1px solid black;">7</td>
      <td style="border: 1px solid black;">4</td>
      <td style="border: 1px solid black;">233</td>
      <td style="border: 1px solid black;">2</td>
      <td style="border: 1px solid black;">22</td>
      <td style="border: 1px solid black;">43</td>
      <td style="border: 1px solid black;">545</td>
      <td style="border: 1px solid black;">43</td>
      <td style="border: 1px solid black;">4</td>
      </tr>



      
  </tbody>
</table>

</body>
</html>














{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
      
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Show Name</th>
    <th>Series</th>
    <th>Lead Actor</th>
    <th>Action</th>
  </thead>
  <tbody>

    @foreach($shows as $show)
    <tr>
      <td>{{$show->id}}</td>
      <td>{{$show->show_name}}</td>
      <td>{{$show->series}}</td>
      <td>{{$show->lead_actor}}</td>
      <td><a href="/export">Export</a></td>
    </tr>
    @endforeach

  </tbody>
</table>

</body>
</html> --}}