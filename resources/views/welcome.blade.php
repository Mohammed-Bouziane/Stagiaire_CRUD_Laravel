<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OQP School</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6; 
            color: #333; 
            margin: 0; 
            padding: 0;
        }
        a {
            text-decoration: none; 
        }
        .container {

            max-width: 1200px;
            height: 500px;
            margin: 0 auto; 
            padding: 20px;
            background-color: #e2e2e2;
            border-radius: 10px;
        }
        .text-center {
            text-align: center; 
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0011ff;
            color: #fff; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer;
            transition: background-color 0.3s ease; 
        }
        .btn:hover {
            background-color: #45a049; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Welcome to Laravel</h1>
            <p>A beautiful framework for web artisans.</p>
            <a href="{{ route('login') }}" class="btn">Log in</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
    </div>
</body>
</html>
