@extends('layouts.main-layout')

@section('content')

<h1>Card singolo cittadino</h1>

<h4>{{$person -> lastName}} {{$person -> firstName}}</h4>

<a href="/">INDIETRO</a>

@endsection