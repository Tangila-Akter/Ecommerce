<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.css")
    <style>
      .min-h-screen {
          min-height: 0vh !important;
      }
      </style>
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")
    <div class="container" align="center">
      <table>
        <tr style="background-color: grey;">
          <td style="padding: 20px;">Customer Name </td>
          <td style="padding: 20px;">Phone </td>
          <td style="padding: 20px;">Address</td>
          <td style="padding: 20px;">Product Title </td>
          <td style="padding: 20px;"> Price</td>
          <td style="padding: 20px;">Quantity </td>
          <td style="padding: 20px;">Status</td>
          <td style="padding: 20px;">Action</td>
        </tr>
        @foreach ($order as $orders)
        <tr style="background-color:black; align-items:center;" align="center">
          <td>{{ $orders->name}}</td>
          <td>{{ $orders->phone }} </td>
          <td>{{ $orders->address }}</td>
          <td>{{ $orders->product_name }} </td>
          <td>{{ $orders->price }}$</td>
          <td>{{ $orders->quantity }} </td>
          <td>{{ $orders->status }} </td>
          <td><a class="btn btn-success" href="{{ url('/updatestatus',$orders->id) }}">Delived</a></td>
          <td><a class="btn btn-warning" href="{{ url('/deleteproduct',$orders->id) }}">Delete</a></td>
        </tr>
        @endforeach
      </table>

    </div>
  </div>
    @include("admin.script")
   
  </body>
</html>