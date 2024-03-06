<!DOCTYPE html>
<html>
    <style>
    table {
    border-left: 0.01em solid #ccc;
    border-right: 0;
    border-top: 0.01em solid #ccc;
    border-bottom: 0;
    border-collapse: collapse;
    }
    table td,
    table th {
    border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 0.01em solid #ccc;
    }

    body
    {
      font-size:0.54em;
    }
    </style>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <h3>@foreach ($assets as $t)
              
              {{$t->department->deptname}}</h3>
               @break
               @endforeach</h3>
  
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>No</b></td>
        <td><b>No Aset</b></td>
        <td><b>No Siri</b></td> 
        <td><b>Tahun Belian</b></td> 
        <td><b>Pengguna</b></td>
        <td><b>Jenis Perkakasan</b></td>
        <td><b>Jenama</b></td>
        <td><b>Lokasi</b></td>  
        <td><b>Nota</b></td>  
      </tr>
      </thead>
      <tbody>
        @forelse ($assets as $user)
         <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->asset_no }}</td>
        <td>{{ $user->serial_no }}</td>
        <td>{{ $user->purchase_year}}</td>
        <td>{{ $user->assigned_to}} </td>
        <td>{{ $user->device->device_name}} </td>
        <td>{{ $user->brand->brand_name}}</td>
        <td>{{ $user->location}} </td> 
        <td></td>                    
        </tr>
        @empty
        @endforelse                                               
      </tbody>
    </table>
  </body>
</html>