@extends('layout.app')
@section('page-title', 'Homepage')

@section('main-content')
<strong class="d-flex justify-content-center fs-1">Modifica {{ $animal->nome }}</strong>
<form action="{{ route('pages.update', ['animal' => $animal->id]) }}" method="POST">
    @method("PUT")
    @csrf
    <div class="input-group-sm container mb-5 w-50">

        <label for="nome">Nome</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="nome" name="nome" value="{{ $animal->nome }}">


        <label for="specie">specie</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="specie dell'animale" id="specie" name="specie" value="{{ $animal->specie }}">

        <label for="razza">Razza</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Razza dell'animale" id="razza" name="razza" value="{{ $animal->razza}}">

        <label for="eta">Età</label>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Età dell'animale" id="eta" name="eta" value="{{ $animal->eta}}">

        <label for="sesso">Sesso</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Sesso dell'animale" id="sesso" name="sesso" value="{{ $animal->sesso}}">

        <label for="colore">Colore</label>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Colore dell'animale" id="colore" name="colore" value="{{ $animal->colore }}">

        <label for="peso">Peso</label>
        <input type="number" step="0.01" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Peso dell'animale in kg" id="peso" name="peso" value="{{ $animal->peso }}">

        <label for="altezza">Altezza</label>
        <input type="number" step="0.01" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Altezza dell'animale in cm" id="altezza" name="altezza" value="{{ $animal->altezza }}">

        <label for="url_img">URL Immagine</label>
        <input type="url" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="URL dell'immagine dell'animale" id="url_img" name="url_img" value="{{ $animal->url_img }}">

        <label for="info">Informazioni</label>
        <input class="form-control mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="info" name="info" value="{{ $animal->info }}">

        <div class="d-flex justify-content-between mb-5">

                <input class="btn btn-primary" type="submit" value="Modifica {{ $animal->nome}}">
                <input class="btn btn-warning" type="reset" value="resetta campi">

        </div>
        <div class="d-flex align-items-center justify-content-center">

            <a href="{{route('pages.index')}}" class="btn btn-primary card-link w-30">Torna alla lista animali</a>
        </div>
    </div>
</form>


    @endsection

