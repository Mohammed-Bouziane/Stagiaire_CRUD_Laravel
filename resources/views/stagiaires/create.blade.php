@extends('layouts.app')

{{-- @section('title', 'Create Stagiaire') --}}

@section('contents')
    <h1 class="mb-0">Add Stagiare</h1>
    <hr />
    <form action="{{ route('stagiaires.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nom" class="form-control" placeholder="nom">
            </div>
            <div class="col">
                <input type="text" name="prenom" class="form-control" placeholder="prenom">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" class="form-control" placeholder="email">
            </div>
            <div class="col">
                <input class="form-control" name="adresse" placeholder="adresse">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
@endsection
