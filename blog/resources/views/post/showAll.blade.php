<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<header>
    <h1>Все посты</h1>
</header>
<main>
    @foreach($posts as $subelem)
    <div class="post">
        <h2>{{$subelem['title']}}</h2>
        <div class="info">
            <span class="date">{{$subelem['date']}}</span><br>
            <span class="author">{{$subelem['author']}}</span>
        </div>
        <div class="text">
            {{$subelem['teaser']}}
        </div>
        <div class="more">
            <a href="post/{{$loop->iteration}}">ссылка на пост</a>
        </div>
    </div>
    @endforeach
</main>
</body>
</html>