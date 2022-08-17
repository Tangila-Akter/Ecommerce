<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.css")
    <style>
        .title{
            color:white; padding-top: 25px; font-size:25px;
            text-align: center;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        body{
          background: #191c24;
          color: white;
        }
        a:link {
          color: white;
        text-decoration: none;
      
      }

.min-h-screen {
    min-height: 0vh !important;
}

    </style>
  </head>
  <body>
    
    <div class="container-scroller" >
        @include("admin.navbar")
        <div class="container" align="center">
            <h1 class="title">Update Product</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
                </div>
            @endif
                <form action="{{ url('/updateproduct',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    
                    <div>
                       <label>Product title</label>
                       <input type="text" style="color: black" name="title" value="{{ $data->title }}" >
                   </div>
                   <div>
                       <label>Price</label>
                       <input type="number" style="color: black" name="price" value="{{$data->price  }}" >
                   </div>
                   <div>
                    <label>Description</label>
                    <input type="text" style="color: black" name="description" value="{{$data->description  }}" >
                    <div>
                   <div>
                       <label>Image</label>
                       <input type="file" name="image" >
                   </div>
                   <div>
                    <label>Quantity</label>
                    <input type="number" style="color: black" name="quantity" value="{{$data->quantity  }}" >
                </div>

                        
                           <input class="btn btn-success" type="submit" value="Save">
                       </div>
                   </div>
                    
                </form>
            
                
            
                
                
            </div>
                

        </div>
       
    @include("admin.script")
   
  </body>
</html>