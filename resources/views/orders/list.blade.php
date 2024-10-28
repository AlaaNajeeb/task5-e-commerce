<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orders</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .btn-animate {
            transition: transform 0.2s;
        }

        .btn-animate:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
  @include('layouts.nav')
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> </nav>
    <br>
    <br>

<div class="container mt-5 fade-in">
    <h1 class="mb-4">Orders</h1>
    {{-- <a href="{{ route('books.create') }}" class="btn btn-primary mb-3 btn-animate">Create</a>
    <a href="{{ route('books.deleted') }}" class="btn btn-danger mb-3 btn-animate">View Deleted Books</a> --}}

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>oreder ID</th>
            <th>Product name</th>
            <th>ordered by</th>
            <th>ordered at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->user->name }}  </td>        
                <td>{{ $order->created_at }}  </td>  
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-info btn-animate">View</a>
                     <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger btn-animate" >Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
