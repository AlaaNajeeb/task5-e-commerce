 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
 </head>
 <body>
     <h2>Product info</h2> 
     Name: {{$product->name}}  <br/>
     Count: {{$product->count}}  <br/>
 
     @if(!$product->categories->isEmpty())
         @foreach($product->categories as $category)   
            <p class="badge badge-pill badge-dark" > {{ $category->name; }}</p>                      
         @endforeach     
     @endif
<br>
     added at: {{$product->created_at?->format('Y-m-d H:i:s')}} <br/>
     updated at: {{$product->updated_at?->diffForHumans() }} <br>
  
     @if($product->image) product image:
     {{ $product->image}} <br>
       <img src="{{ asset('storage/'.$product->image) }}" style="width:500;" alt="{{ $product->name }}">
     @endif 
     <br><br>
<a href="{{route('products.index')}}" class="btn mb-2" style="background-color:aliceblue">all categories</a>

 </body>
 </html>