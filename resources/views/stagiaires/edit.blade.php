@extends('layouts.app')

{{-- @section('title', 'Edit Product') --}}

@section('contents')
    <h1 class="mb-0">Edit Stagiaire {{ $stagiaire->nom }} {{ $stagiaire->prenom }}</h1>
    <hr />
    <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="nom" value="{{ $stagiaire->nom }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control" placeholder="prenom"
                    value="{{ $stagiaire->prenom }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="email"
                    value="{{ $stagiaire->email }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" name="adresse" class="form-control" placeholder="adresse"
                    value="{{ $stagiaire->adresse }}">
                {{-- <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $stagiaire->adresse }}</textarea> --}}
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
