@foreach ($train as $item)
    <div class="train">
        <h3>{{ $item->company }}</h3>
        <h3>{{ $item->train_type }}</h3>
        <h3>{{ $item->train_stops }}</h3>
        <h3>{{ $item->departure_station }}</h3>
        <h3>{{ $item->arrival_station }}</h3>
        <h3>{{ $item->departure_time }}</h3>
        <h3>{{ $item->arrival_time }}</h3>
        <h3>{{ $item->train_code }}</h3>
        <h3>{{ $item->ticket_price }}</h3>
        <h3>{{ $item->carriages_number }}</h3>
        <h3>{{ $item->class_type }}</h3>
        <h3>{{ $item->passengers_number }}</h3>
        <h3>{{ $item->on_time }}</h3>
        <p style="color: red; border-bottom: 5px solid blue;">{{ $item->cancelled }}</p>
    </div>
@endforeach
