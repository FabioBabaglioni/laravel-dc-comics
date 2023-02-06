@extends('layouts.main-layout')

@section('content')

<h2>Anagrafica Cittadini</h2>

<ul>
    @foreach ($people as $person)
    <a href="{{route('person.show', $person)}}">
        <li>{{$person -> lastName}} - {{$person -> firstName}}</li>
    </a>

    @endforeach
</ul>

@endsection