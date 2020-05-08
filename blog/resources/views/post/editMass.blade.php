@foreach($posts as $post)
<form action="" method="POST">
    {{csrf_field()}}
    <input name="title{{$post->id}}" value="{{$post->title}}"><br><br>
    <input name="description{{$post->id}}" value="{{$post->description}}"><br><br>
    <input name="date{{$post->id}}" value="{{$post->date}}"><br><br>
    <textarea name="text{{$post->id}}">{{$post->text}}</textarea><br><br>
    <input name="submit{{$post->id}}" type="submit">
</form>
    @endforeach