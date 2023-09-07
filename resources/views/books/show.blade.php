<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Books</title>
<style>/* Global styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
    }
    
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    /* Heading styles */
    h2 {
        color: #007bff;
    }
    
    /* Button styles */
    .btn {
        text-decoration: none;
        cursor: pointer;
    }
    
    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }
    
    /* Margin for the back button */
    .mb-3 {
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
    @extends('layouts.app')

@section('title')
    {{ $book->name }}
@endsection

@section('content')
    <div class="container">
        <h2 class="text-primary">{{ $book->name }}</h2>
        <p><strong>Price:</strong> ${{ $book->price }}</p>
        <p><strong>Description:</strong> {{ $book->description }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary mb-3">Back to Book List</a>
    </div>
@endsection
</body>
</html>
