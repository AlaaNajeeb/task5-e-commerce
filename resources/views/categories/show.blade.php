@php

// dump($category->name);
// dump($category->created_at?->format('Y-m-d H:i:s')); 
// dump($category->created_at?->diffForHumans() );
//  //   dd($category);
@endphp
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
     <h2>Category info</h2> 
     Name: {{$category->name}}  <br/>
     created at: {{$category->created_at?->format('Y-m-d H:i:s')}} <br/>
     updated at: {{$category->updated_at?->diffForHumans() }}
  
     <br><br>
<a href="{{route('categories.index')}}" class="btn mb-2" style="background-color:aliceblue">all categories</a>

 </body>
 </html>