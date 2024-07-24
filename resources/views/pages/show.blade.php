@extends('layout.app')
@section('page-title', 'Homepage')

    @section('main-content')

    <div class="col-12 mt-2 d-flex justify-content-center">
        <div style="width: 40vw">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        @elseif (session('message_nuovo_animale'))
        <div class="alert alert-success">
            {{ session('message_nuovo_animale') }}
        </div>
        @endif
    </div>
</div>
</div>
            <div class="col-12 m-2 d-flex justify-content-center">
                <div class="card" style="width: 40vw">

                    <img src="{{ $animal->url_img }}" class="card-img-top rounded-4" alt="fake img" >

                    <div class="card-body">
                        <h5 class="card-title">Specie: {{ $animal->specie }}</h5>
                        <h5 class="card-title">Nome: {{ $animal->nome }}</h5>
                        <p class="card-text">
                            {{ $animal->info }}

                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Età: {{ $animal->eta}} anni.</li>
                        <li class="list-group-item">Peso: {{ $animal->peso}} kg.</li>
                        <li class="list-group-item">Altezza: {{ $animal->altezza}} cm.</li>
                    </ul>
                    <div class="card-body d-flex justify-content-evenly align-items-center">

                        <a href="{{route('pages.index')}}" class="btn btn-primary card-link w-30">Torna alla lista animali</a>
                        <a href="{{ route('pages.edit', ['animal' => $animal->id]) }}" class="btn btn-success d-flex">Modifica</a>
                        <form action="{{ route('pages.destroy', ['animal' => $animal->id]) }}" method="POST" class="d-inline-block" id="creation_form">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-warning">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>

    @endsection

    @section('custom-scripts')
    @vite('resources/js/alert_confirm.js')
    @endsection
