@extends('layout')

@section('content')
<div class="row d-flex justify-content-between">
    <div class="col-8">
        <h1>Détail d'un contact</h1>
    </div>

</div>
<div class="row" >

    <div class="col-12">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" readonly class="form-control" id="name" name="name" value="{{$contact->name}}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" readonly class="form-control" id="email" name="email" value="{{$contact->email}}" required>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="text" readonly class="form-control" id="phone" name="phone" value="{{$contact->phone}}" required>
        </div>

    </div>
</div>
@endsection

