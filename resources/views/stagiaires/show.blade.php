@extends('layouts.app')

{{-- @section('title', 'Show Product') --}}

@section('contents')
    <h1 class="mb-0">Detail Stagiaire</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="nom" value="{{ $stagiaire->nom }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $stagiaire->prenom }}"
                readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="email" value="{{ $stagiaire->email }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" placeholder="adresse"
                value="{{ $stagiaire->adresse }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At"
                value="{{ $stagiaire->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                value="{{ $stagiaire->updated_at }}" readonly>
        </div>
    </div>
@endsection
