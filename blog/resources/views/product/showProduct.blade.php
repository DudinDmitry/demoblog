<!DOCTYPE html>
<html>
<head>
    <title>Title Product</title>
</head>
<body>
<header>
    <h1>Продукт: </h1>
</header>
<main>
    <p>{{$category['name']}}</p>
    <p>{{$product['name']}}</p>
    <p>Цена: {{$product['cost']}}</p>
    <p>{{$product['desc']}}</p>
    <p>{{$product['inStock']}}</p>

</main>
</body>
</html>