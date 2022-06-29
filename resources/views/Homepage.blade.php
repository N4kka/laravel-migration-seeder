@extends('layouts/app')

@section('main-content')
    <h1>Lista dei treni:</h1>

    @foreach ($today_train as $list_item)
        <div>
            <h3>Company: {{ $list_item->company }}</h3>
            <h3>Train type: {{ $list_item->train_type }}</h3>
            <h3>Stops: {{ $list_item->train_stops }}</h3>
            <h3>Departure station: {{ $list_item->departure_station }}</h3>
            <h3>Arrival station: {{ $list_item->arrival_station }}</h3>
            <h3>Departure time:{{ $list_item->departure_time }}</h3>
            <h3>Arrival time: {{ $list_item->arrival_time }}</h3>
            <h3>Departure date: {{ $list_item->departure_date }}</h3>
            <h3>Train code: {{ $list_item->train_code }}</h3>
            <h3>Price: {{ $list_item->ticket_price }}</h3>
            <h3>Carriages number: {{ $list_item->carriages_number }}</h3>
            <h3>Type: {{ $list_item->class_type }}</h3>
            <h3>Passengers: {{ $list_item->passengers_number }}</h3>
            <h3>On time: {{ $list_item->on_time }}</h3>
            <p style="color: red; border-bottom: 5px solid blue;">{{ $list_item->cancelled }}</p>
        </div>
    @endforeach
@endsection
