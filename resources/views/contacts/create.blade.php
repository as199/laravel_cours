@extends('layout')

@section('content')
<div class="row d-flex justify-content-between">
    <div class="col-8">
        <h1>Ajouter un contact</h1>
    </div>

</div>
<form class="row" method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <div class="col-12">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </div>
</form>
@endsection

