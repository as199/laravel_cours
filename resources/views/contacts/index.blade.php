@extends('layout')

@section('content')
<div class="row d-flex justify-content-between">
    <div class="col-8">
        <h1>Liste des contacts</h1>
    </div>
    <div class="col-4 mt-3">
        <a href="{{ route('contacts.create') }}" class="btn btn-success">Ajouter un contact</a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($contacts->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">Aucun contact trouvé</td>
                    </tr>
                @else
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Modifier</a>
                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">Voir</a>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
