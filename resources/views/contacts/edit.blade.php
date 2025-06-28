@extends('layout')

@section('content')
<div class="row d-flex justify-content-between">
    <div class="col-8">
        <h1>Modifier un contact</h1>
    </div>

</div>
<form class="row" method="POST" action="{{ route('contacts.update', $contact->id) }}">
    @csrf
    @method('PUT')
    <div class="col-12">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$contact->name}}" required>
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}" required>
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}" required>
            @error('phone')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}" required>
            @error('address')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="zip">Code postal</label>
            <input type="text" class="form-control" id="zip" name="zip" value="{{ $contact->zip }}" required>
            @error('zip')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </div>
</form>
@endsection

