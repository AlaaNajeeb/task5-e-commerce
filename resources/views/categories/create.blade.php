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
    <h2>enter a new category</h2>
    <div class='container'>
        <form action="{{route('categories.store')}}" method="post" enctype='multipart/form-data'>
        @csrf
        <div class='form-group'>
            <label for="cat-name" class='nb-2'>Category Name:</label>
            <input type="text" required class='form-control' name='name' id="cat-name">

        </div>
        
        <button  type='submit' class="btn btn-primary">save</button>
        <a href=""    >cancel</a>

      
       </form>
   </div>
</body>
</html>