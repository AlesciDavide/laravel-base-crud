@extends('layout.app')
@section('page-title', 'Homepage')

    @section('main-content')

    @foreach ($animals as $animal)
            {{ $animal->nome }}

    @endforeach

    @endsection
