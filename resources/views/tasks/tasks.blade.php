
@extends('layout')
@section('title','All Tasks')
@section('content')


<ul>
@foreach ($tasks as $task)

        <li>
            <a href="/show/{{$task->id}}">{{$task->name}}</a>
        </li>

    @endforeach
</ul>

@endsection
