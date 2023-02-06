@extends('layouts.main-layout')

@section('content')

<h2>Anagrafica Cittadini</h2>

<ul>
    @foreach ($people as $person)
    <li>{{$person -> lastName}} - {{$person -> firstName}}</li>
    @endforeach
</ul>

@endsection