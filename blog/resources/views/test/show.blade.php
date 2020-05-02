<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
<p>Name: {{$employee['name']}}</p>
<p>Surname: {{$employee['surname']}}</p>
<p>Salary: {{$employee['salary']}}</p>
<p>Count: {{count($employee)}}</p>
<p>Country: {{$location['country'] or 'Russia'}}</p>
<p>Sity: {{$location['sity'] or 'Moscow'}}</p>
<p>Date: {{$year or date('Y')}}</p>
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
@if(count($new)>0)
    @php
    $sum=0;
        foreach ($new as $elem=>$value)
            {
$sum+=$value;
            }
        echo $sum;
    @endphp

@endif
</body>
</html>