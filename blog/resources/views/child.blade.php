@extends('app')
@section('title', $title)

@section('sidebar')
    @parent

    {{$aside}}
@endsection

@section('content')
    <ul>
    @foreach($links as $value)
            <li><a href="http://{{$value['href']}}">{{$value['text']}}</a><br></li>
    @endforeach
    </ul>
@endsection