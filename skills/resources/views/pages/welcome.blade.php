<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
  </head>
  <body>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Domain</th>
                    <th>Assets</th>
                    <th>Motivation</th>
                    <th>Process</th>
                    <th>People</th>
                    <th>Location</th>
                    <th>Time</th>


                </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
                <tr>
                    <td>{{$item->categorz->name}}</td>
                    <td>{{$item->assets}}</td>
                    <td>{{$item->motivation}}</td>
                    <td>{{$item->process}}</td>
                    <td>{{$item->people}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->time}}</td>
                </tr>
              @endforeach

            </tbody>

        </table>

        <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>

  </body>
</html>
