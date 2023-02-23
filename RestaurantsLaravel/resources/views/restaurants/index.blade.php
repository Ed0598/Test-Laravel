

@foreach ($restaurants as $restaurant)
    <p> {{ $restaurant->name }} </p>
    <p> {{ $restaurant->address }} </p>
    <p> {{ $restaurant->zipCode }} </p>
    <p> {{ $restaurant->town }} </p>
    <p> {{ $restaurant->country }} </p>
    <p> {{ $restaurant->description }} </p>
    <p> {{ $restaurant->review }} </p>
    <p> {{ $restaurant->created_at }} </p>
    <p> {{ $restaurant->updated_at }} </p>
@endforeach

