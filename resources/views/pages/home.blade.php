@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-3">Anagrafica Cittadini</h2>

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