@extends('layouts.app')
@section('content')
    <h1>Treni</h1>
    @foreach ($trains as $train)
     <ul>
        <li>{{ $train->azienda }}</li>
        <li>{{ $train->stazione_partenza }}</li>
        <li>{{ $train->stazione_arrivo }}</li>
        <li>{{ $train->orario_partenza }}</li>
        <li>{{ $train->orario_arrivo }}</li>
        <li>{{ $train->id_treno }}</li>
        <li>{{ $train->n_carrozze }}</li>
    </ul>
    @endforeach

@endsection