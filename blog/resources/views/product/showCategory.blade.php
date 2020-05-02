<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<header>
    <h1>Все продукты категории</h1>
</header>
<main>
@foreach($category as  $subelem)
        <p>Название: <a href="{{$categoryId}}/{{$loop->iteration}}">{{$subelem['name']}}</a> - Цена: {{$subelem['cost']}}</p>
    @endforeach
</main>
</body>
</html>