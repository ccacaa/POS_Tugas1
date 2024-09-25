<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/js2/home.css') }}">
    <title>Product Index</title>
</head>
<body>
    <h1>Product Page</h1>
    <h2>Product Category : </h2>
    <li><a href="{{ route('product.food-beverage')}}">Food Beverage</a></li>
    <li><a href="{{ route('product.beauty-health')}}">Beauty Healt</a></li>
    <li><a href="{{ route('product.home-care')}}">Home Care</a> </li>
    <li><a href="{{ route('product.baby-kid')}}">Baby Kid</a> </li>

</body>
</html>