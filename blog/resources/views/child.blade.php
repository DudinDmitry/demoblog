@extends('app')
@section('title', $title)

@section('sidebar')
    @parent

    {{$aside}}
@endsection

@section('content')
    <table border="1px">
        <th>№</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Зарплата</th>
        <th>Бан</th>
        @foreach($employee as $subelem)
            @if($subelem['banned']==true)
                @php
                    $subelem['banned']='Бан';
                $color='#FFE4E1';
                @endphp

            @else
                @php
                    $subelem['banned']='Активен';
                $color='white';
                @endphp
            @endif
            <tr bgcolor="{{$color}}">
                <td>{{$loop->iteration}}</td>


                @foreach($subelem as $elem)
                    <td>{{$elem}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>

    <form>
        @foreach($employee as $subelem2)
            {{ $loop->iteration}}
            <select>
                @foreach($subelem2 as $elem2)
                    <option>{{$elem2}}</option>
                @endforeach
            </select><br>
        @endforeach
    </form>
    <ul>
        @foreach($arrayday as $elem)
            @if($elem==$today)
                <li style="color:darkorange">{{$elem}}</li>
                @continue
                @endif
            <li>{{$elem}}</li>
        @endforeach
    </ul>
@endsection