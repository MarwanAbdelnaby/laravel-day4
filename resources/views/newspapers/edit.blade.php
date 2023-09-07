@extends('layouts.app')

@section('title', 'Edit Newspaper')

@section('content')
<div class="container">
    <h2>Edit Newspaper</h2>
    <form action="{{ route('newspapers.update', $newspaper->id) }}" method="POST">
        @csrf
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update newspaper</button>
    </form>
</div>
</body>
</html>

<style>
.container {
    margin-top: 20px;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #007bff;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    padding: 5px 10px;
    text-decoration: none;
    color: #fff;
    cursor: pointer;
    border: none;
}

.btn-primary {
    background-color: #007bff;
}
</style>
