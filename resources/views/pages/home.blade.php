@extends('layouts.main-layout')

@section('content')

<h2>Vedi tutti i cittadini</h2>

<ul>
    @foreach ($people as $person)
    <li>{{$person -> firstName}}</li>
    @endforeach
</ul>

@endsection