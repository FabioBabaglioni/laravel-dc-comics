@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-5">Anagrafica Cittadini</h2>

    <div class="d-flex justify-content-center">
        <a href="{{route('person.create')}}">
            <div class="btn btn-outline-info mb-5 fs-4">Clicca QUI per inserire anagrafica nuovo cittadino</div>
        </a>
    </div>




    <div class="d-flex flex-wrap justify-content-between">
        @foreach ($people as $person)

        <div class="ms_card mb-3">

            <div class="fs-4 text-center pb-2">{{$person -> lastName}} - {{$person -> firstName}} </div>

            <div class="d-flex justify-content-between">
                <a href="{{route('person.edit', $person)}}">
                    <div class="btn btn-outline-success"> AGGIORNA</div>
                </a>

                <a href="{{route('person.show', $person)}}">
                    <div class="btn btn-outline-primary"> MOSTRA</div>
                </a>

                <a href="{{route('person.delete', $person)}}">
                    <div class="btn btn-outline-danger"> CANCELLA</div>
                </a>
            </div>
        </div>

        @endforeach
    </div>


</div>

@endsection