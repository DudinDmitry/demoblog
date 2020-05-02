<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<header>
    <h1>{{$post['title']}}</h1>
</header>
<main>
    <div class="info">
        <span class="date">{{$post['date']}}</span><br>
        <span class="author">{{$post['author']}}</span>
    </div>
    <div class="text">
        {{$post['text']}}
    </div>
</main>
</body>
</html>