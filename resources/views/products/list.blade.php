{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <title>Products</title>
</head>
<body>
@include('layouts.nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">  </nav>
    <br>
    <br>
    <h1>All Products</h1>
    {{-- nav bar --}}

    {{-- CONTENT --}}
    <div class='container mt-4 '>

      @if (Auth::check() && Auth::user()->role === 'admin') 
        <a href="{{route('products.create')}}" class="btn btn-primary mb-3 btn-animate"  >add new product</a>
      @endif
        <div class="row container mt-4">
        @if ($products->isEmpty())  
              <h3>No products .. please add one</h3>
        @else 
           <div class='row row-sm mt-2'>
           @foreach ($products as $product)
           <div class='col-md-6 col-lg-6 col-xl-4  col-sm-6'> 
             <div class='card' style='margin-bottom: 20px'>
                <div class='card-body'>
                   <h5 class="card-title">{{$product->name}}</h5>
                   <p class="card-text">count: {{$product->count}}</p>
                   {{-- <p class="badge badge-pill badge-dark">{{$product->categories }}</p> --}}
                   @if(!$product->categories->isEmpty())
                      @foreach($product->categories as $category)   
                        <p class="badge badge-pill badge-dark" > {{ $category->name; }}</p>                      
                      @endforeach     
                   @endif
                  
                   @if($product->image)  
                   {{-- {{ $product->image}} <br> --}}
                     <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid" style="max-height: 180px; object-fit: cover; width: 100%;" alt="{{ $product->name }}">
                   @endif 
<br>
                   <form action="{{route('products.destroy',$product->id)}}" method='post'>
                       @csrf
                       @method('DELETE')
                       {{-- <div class="d-flex justify-content-between">  --}}
                        <a href="{{route('products.show',$product->id)}}" class='btn btn-success'>View</a>
                        @if (Auth::check() && Auth::user()->role === 'admin') 
                          <a href="{{route('products.edit',$product->id)}}" class='btn btn-info' >edit</a>
                          <button type='submit' onclick="return confirm('هل أنت متأكد من حذف هذا التصنيف')" class='btn btn-danger' >Delete</button>
                        @endif
                        {{-- </div> --}}
                      </form>
                </div>
           </div>
       </div>
           @endforeach  
       </div>    
       @endif
      </div>
   </div>


   
    
</body>
</html>