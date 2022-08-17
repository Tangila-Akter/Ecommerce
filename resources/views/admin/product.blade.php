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
        
.min-h-screen {
    min-height: 0vh !important;
}
</style>

  </head>
  <body>
    
    <div class="container-scroller" >
        @include("admin.navbar")
        <div class="container" align="center">
            <h1 class="title">Add Product</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
                </div>
            @endif
                <form action="{{ url('/uploadproduct') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    
                    <div>
                       <label>Product title</label>
                       <input type="text" style="color: black" name="title" placeholder="Write a product title" required>
                   </div>
                   <div>
                       <label>Price</label>
                       <input type="number" style="color: black" name="price" placeholder="Price" required>
                   </div>
                   <div>
                    <label>Description</label>
                    <input type="text" style="color: black" name="description" placeholder="Description" required>
                    <div>
                   <div>
                       <label>Image</label>
                       <input type="file" name="image" required>
                   </div>
                   <div>
                    <label>Quantity</label>
                    <input type="number" style="color: black" name="quantity" placeholder="quantity" required>
                </div>
                   
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <input class="btn btn-success" type="submit" value="Save">
                       </div>
                   </div>
                    
                </form>
            
                
            
                
                
            </div>
                

        </div>
       
    @include("admin.script")
   
  </body>
</html>