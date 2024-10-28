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
    <h2>enter a new product</h2>
    <div class='container'>
        <form action="{{route('products.update',$product->id)}}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div class='form-group'>
            <label for="product-name" class='nb-2'>product Name:</label>
            <input type="text" value='{{$product->name}}' class='form-control' name='name' id="product-name">

            <label for="product-count" class='nb-2'>product count:</label>
            <input type="number" value='{{$product->count}}' class='form-control' name='count' id="product-count">

            <label for="product-category" class='nb-2'>product category:</label>
            @foreach($categories as $category)
                <div class='form-check'>
                    <input name='categories_ids[]' value='{{$category->id}}'  {{ $product->categories->contains($category->id) ? 'checked' : ''}} class='form-check-input' type="checkbox"  id='product-category'  >
                    <label class='form-check-label'  for='product-category'>
                        {{$category->name}}  </label>
                </div>
            @endforeach

        </div>
        
        <div class='form-group' id="image-container">
            {{-- <span id="file-name">{{ $blog->image }}</span> --}}
            <p id="file-name">{{$product->image}}</p> <!-- استبدل باسم الصورة القديمة -->
                        
            {{-- <label class="file-label" for="image-upload">اختر صورة جديدة</label> --}}
             
            <input type="file" name="image">
 
        </div> <br>

        <button  type='submit' class="btn btn-primary">save</button>
        <a href="{{route('products.index')}}"     >cancel</a>

      
       </form>
   </div>
</body>
</html>