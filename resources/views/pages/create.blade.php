@extends('layout.app')
@section('page-title', 'Homepage')

@section('main-content')
<strong class="d-flex justify-content-center fs-1">Crea un nuovo animale!!</strong>
<div class="d-flex justify-content-center align-item-center">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
<form action="{{ route('pages.store') }}" method="POST" id="creation_form">
    @csrf

    <div class="input-group-sm container mb-5 w-50">

        <label for="nome">Nome</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Nome animale" id="nome" name="nome" value="{{ old('nome') }}">


        <label for="specie">specie</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="specie dell'animale" id="specie" name="specie" value="{{ old('specie') }}">

        <label for="razza">Razza</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Razza dell'animale" id="razza" name="razza" value="{{ old('razza') }}">

        <label for="eta">Età</label>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Età dell'animale" id="eta" name="eta" value="{{ old('eta') }}">

        <label for="sesso">Sesso</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Sesso dell'animale" id="sesso" name="sesso" value="{{ old('sesso') }}">

        <label for="colore">Colore</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Colore dell'animale" id="colore" name="colore" value="{{ old('colore') }}">

        <label for="peso">Peso</label>
        <input type="number" step="0.01" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Peso dell'animale in kg" id="peso" name="peso" value="{{ old('peso') }}">

        <label for="altezza">Altezza</label>
        <input type="number" step="0.01" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Altezza dell'animale in cm" id="altezza" name="altezza" value="{{ old('altezza') }}">

        <label for="url_img">URL Immagine</label>
        <input type="url" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="URL dell'immagine dell'animale" id="url_img" name="url_img" value="{{ old('url_img') }}">

        <label for="info">Informazioni</label>
        <textarea class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Informazioni aggiuntive sull'animale" id="info" name="info" value="{{ old('info') }}"></textarea>

        <div class="d-flex justify-content-between mt-3">

                <input class="btn btn-primary" type="submit" value="crea un nuovo animale">
                <input class="btn btn-warning" type="reset" value="resetta campi">

        </div>
    </div>
</form>
<a href="{{route('pages.index')}}" class="card-link d-flex justify-content-center">Torna alla lista animali</a>

    @endsection

    @section('custom-scripts')
    @vite('resources/js/alert_confirm.js')
    @endsection

