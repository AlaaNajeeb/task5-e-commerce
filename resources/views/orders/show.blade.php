<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>order info</title>
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
<div class="container mt-5 fade-in">

    <p><strong>order :</strong> {{ $order->id }}</p>

    <p><strong>product name:</strong></p>
    <p>{{ $order->product->name }}</p>

    <p><strong>user name:</strong></p>
    <p>{{ $order->user->name }}</p>
    
    <p><strong>oredred at:</strong></p>
    <p>{{ $order->created_at->diffForHumans() }}</p>


    <a href="{{ route('orders.list') }}" class="btn btn-secondary btn-animate">Back to List</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
