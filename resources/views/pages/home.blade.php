@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-3">Anagrafica Cittadini</h2>

    <a href="{{route('person.create')}}">
        <div class="text-center fs-5 pb-3">Inserisci anagrafica nuovo cittadino</div>
    </a>

    @foreach ($people as $person)

    <div>
        <a href="{{route('person.show', $person)}}">
            <span>{{$person -> lastName}} - {{$person -> firstName}} </span>
        </a>
        <a href="{{route('person.delete', $person)}}">
            <span><i class="fa-solid fa-trash"></i></span>
        </a>

    </div>

    @endforeach

</div>

@endsection