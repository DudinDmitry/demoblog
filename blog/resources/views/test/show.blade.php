<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>

{{-- Этот комментарий не видно в исполнении --}}
{!! $string !!}
@php
    echo 'Зачем ты вывел этот текст?';
@endphp
<br>
@if($season>12)
    Введён некорректный месяц
@elseif($season==12 || $season<3)
    Зима
@elseif($season>2 && $season<6)
    Весна
@elseif($season>5 && $season<9)
    Лето
@elseif($season>8 && $season<12)
    Осень
@endif
@unless($age>=18)
    Ваш возраст меньше 18
@endunless
<br>
<ul>
    @foreach($new as $elem)
        @if($loop->remaining<3)
            <li>{{$loop->iteration}}-{{$elem}}</li>
            @continue
        @endif

        <b>{{$loop->iteration}}-{{$elem}}</b><br>

    @endforeach
@for($i=0;$i<11;$i++)
    {{$i}}
    @endfor
</ul>
</body>
</html>