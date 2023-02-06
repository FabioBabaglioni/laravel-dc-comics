@extends('layouts.main-layout')

@section('content')

<div class="container">
    <h2 class="text-center py-3">Anagrafica cittadino</h2>

    <form class="row g-3" method="POST" action="{{route('person.store')}}">
        @csrf
        <div class="col-md-6">
            <label for="firstName" class="form-label fs-5">Nome</label>
            <input type="text" class="form-control" name="firstName">
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label fs-5">Cognome</label>
            <input type="text" class="form-control" name="lastName">
        </div>
        <div class="col-12">
            <label for="dateOfBirth" class="form-label fs-5">Data di nascita</label>
            <input type="date" class="form-control" name="dateOfBirth">
        </div>
        <div class="col-12">
            <label for="height" class="form-label fs-5">Altezza in cm</label>
            <input type="number" class="form-control" name="height">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-outline-success fs-5">Aggiungi anagrafica</button>
        </div>
    </form>
</div>

@endsection