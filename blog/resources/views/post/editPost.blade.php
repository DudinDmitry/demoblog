<form action="" method="POST">
    {{csrf_field()}}
    <input name="title" value="{{$post->title}}"><br><br>
    <input name="description" value="{{$post->description}}"><br><br>
    <input name="date" value="{{$post->date}}"><br><br>
    <textarea name="text">{{$post->text}}</textarea><br><br>
    <input name="submit" type="submit">
</form>