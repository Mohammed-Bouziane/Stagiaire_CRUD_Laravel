@extends('layouts.app')



@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <style>
            .btn_add {
                background-color: red;
                color: white;
            }
        </style>
        <h1 class="mb-0">List Stagiaires</h1>
        <a href="{{ route('stagiaires.create') }}" class="btn btn_add">Add Stagiaire</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if ($stagiaire->count() > 0)
                @foreach ($stagiaire as $st)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $st->nom }}</td>
                        <td class="align-middle">{{ $st->prenom }}</td>
                        <td class="align-middle">{{ $st->email }}</td>
                        <td class="align-middle">{{ $st->adresse }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('stagiaires.show', $st->id) }}" type="button"
                                    class="btn btn-secondary"><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route('stagiaires.edit', $st->id) }}" type="button" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                                <form action="{{ route('stagiaires.destroy', $st->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Aucun stagiaire trouvé !</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
