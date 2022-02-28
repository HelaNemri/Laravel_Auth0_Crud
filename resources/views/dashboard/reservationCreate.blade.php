@extends('index')
@section('title', 'Create Reservation')
@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header display-4">{{ $hotelInfo->name }} - <small
                    class="text-muted">{{ $hotelInfo->location }}</small> </div>
            <div class="card-body">
                <p class="card-text">Book your stay now at the most magneficent resort in the world!</p>
                <form action="{{ route('reservations.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="room">Room Type</label>
                                <select name="room_id" class="form-control">
                                    @foreach ($hotelInfo->rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->type }}-{{ $room->price }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="guests">Number of guests</label>
                                <input class="form-control" name="num_of_guests" placeholder="1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="arrival">Arrival</label>
                                <input type="date" class="form-control" name="arrival" placeholder="03/21/2020">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="departure">Departure</label>
                                <input type="date" class="form-control" name="departure" placeholder="03/23/2020">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary">Book it</button>
                </form>
            </div>
        </div>
    </div>

@endsection
