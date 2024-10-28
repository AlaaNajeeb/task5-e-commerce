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
    <h2>User info</h2> 
    Name: {{$user->name}}  <br/>
    Email: {{$user->email}}  <br/>
    Role: {{$user->role}}  <br/>
<br>
    Registered at: {{$user->created_at?->format('Y-m-d H:i:s')}} <br/>
      
    <br><br>
<a href="{{route('users.index')}}" class="btn mb-2" style="background-color:aliceblue">all categories</a>

</body>
</html>