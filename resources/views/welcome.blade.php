@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
 
<ul>
    @foreach($trains as $index => $train)
    <ul>
        <li>
            {{ $train->id }}
        </li>
        <li>
            {{ $train->company }}
        </li>
        <li>
            {{ $train->departure_station }}
        </li>
        <li>
            {{ $train->arrival_station}}
        </li>
        <li>
            {{ $train->departure_time}}
        </li>
        <li>
            {{ $train->arrival_time}}
        </li>
        <li>
            {{ $train->train_code}} 
        </li>
        <li>
            {{ $train->carriages_number}} 
        </li>
        <li>
            {{ $train->on_Time}} 
        </li>
        <li>
            {{ $train->deleted}} 
        </li>
    </ul>

    
    @endforeach
</ul>
@endsection
