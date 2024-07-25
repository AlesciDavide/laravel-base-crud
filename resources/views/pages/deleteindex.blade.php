@extends('layout.app')
@section('page-title', 'Homepage')

    @section('main-content')
    <section class="container my_container">
        @if (session('message_delete'))
        <div class="alert alert-success">
            {{ session('message_delete') }}
        </div>
        @endif
        <article class="row d-flex justify-content-center">
        @foreach ($animals as $animal)
            <div class="col-12 col-sm-5 col-lg-3  m-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">

                    <img src="{{ $animal->url_img }}" class="card-img-top" alt="fake img">

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
                    <div class="card-body d-flex justify-content-evenly align-center align-items-center">
                        <form action="{{ route('pages.restore', ['animal' => $animal->id]) }}" method="POST" class="d-inline-block" data_animal_id="{{ $animal->id }}" data_animal_nome="{{ $animal->nome }}">
                            @method('PATCH')
                            @csrf
                            <button type="submit" class="btn btn-secondary">Ripristina</button>
                        </form>
                        <form action="{{ route('pages.permanent_delete', ['animal' => $animal->id]) }}" method="POST" class="d-inline-block delete_form" data_animal_id="{{ $animal->id }}" data_animal_nome="{{ $animal->nome }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </article>

    </section>


    @endsection

    @section('custom-scripts')
    @vite('resources/js/delete_confirm.js')
    @endsection
