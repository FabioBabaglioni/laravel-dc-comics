@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-3">Anagrafica cittadino </h2>

    <div class="d-flex justify-content-center">
        <div class="ms_singol_card">
            <h4>{{$person -> lastName}} {{$person -> firstName}}</h4>
            <div class="fs-5">Data di nascita: {{$person -> dateOfBirth}}</div>
            <div class="fs-5">Altezza: {{$person -> height}} cm</div>

        </div>
    </div>
    <div class="text-center mt-3">
        <a href="/">
            <div class="btn btn-outline-primary">INDIETRO</div>
        </a>
        <a href="{{route('person.edit', $person)}}">
            <div class="btn btn-outline-success">AGGIORNA</div>
        </a>
    </div>


</div>



@endsection