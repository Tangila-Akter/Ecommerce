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
    <div class="container" align="center" style="padding-bottom:20px;">
      @if (session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{ session()->get('message') }}
      </div>
  @endif

      <table>
        <tr style="background-color: grey;">
          <td style="padding: 20px;">Title </td>
          <td style="padding: 20px;">Description </td>
          <td style="padding: 20px;">Quantity</td>
          <td style="padding: 20px;">Price </td>
          <td style="padding: 20px;"> Image</td>
          <td style="padding: 20px;">Update </td>
          <td style="padding: 20px;">Delete</td>
        </tr>
        @foreach ($data as $product)
        <tr style="background-color:black; align-items:center;" align="center">
          <td>{{ $product->title }}</td>
          <td>{{ $product->description }} </td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->price }}$ </td>
          <td><img height="80" width="40" src="productimage/{{ $product->image }}" ></td>
          <td><a class="btn btn-primary" href="{{ url('/updateview',$product->id) }}">Update</a></td>
          <td><a class="btn btn-warning" href="{{ url('/deleteproduct',$product->id) }}">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
    @include("admin.script")
   
  </body>
</html>