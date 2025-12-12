<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Categories</h1>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}: {{ $category->description }}</li>
        @endforeach
    </ul>
    <br>
    <a href="{{ route('categories.create') }}">Create New Category</a> | <a href="{{ route('dashboard') }}">Back to Dashboard</a>
</body>
</html>