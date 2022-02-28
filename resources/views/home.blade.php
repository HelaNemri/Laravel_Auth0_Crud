@extends('index')
@section('title', 'Home')
@section('content')
    <div class="jumbotron text-light" style="background-image:url('https://source.unsplash.com/1600x900/?nature')">
        <div class="container-fluid">
            @if (Auth::user())
                <h1 class="display-4">Welcome back, {{ Auth::user()->nickname }}!</h1>
                <p class="lead">To your one stop shop for reservation management.</p>
                <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
            @else
                <h1 class="display-3">Reservation management made easy.</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam magni assumenda
                    in
                    iste saepe est explicabo ipsa, corporis dolorum nihil enim. Est ab quasi, itaque cupiditate sit velit
                    quae
                    illum.
                    Blanditiis natus optio, dolorum dolor cum molestiae similique doloribus tenetur alias excepturi
                    architecto
                    vitae voluptatibus dignissimos modi explicabo est animi, tempore nesciunt beatae officia, id iste quos.
                    Quaerat, et consequuntur.
                    Optio dolor consequuntur, sint et suscipit magni architecto tempora repellat quas at, iure provident
                    laudantium vero, aliquam necessitatibus animi nemo impedit consequatur? Facilis pariatur fugit debitis
                    illum, sint aliquid! Consequuntur.</p>
                <a href="/login" class="btn btn-success btn-lg my-2">Sign up for Access to Thousands of Hotels</a>
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Convenient</h5>
                        <p class="card-text">Manage all your hotel reservations in one place</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Best prices</h5>
                        <p class="card-text">We have special discounts at the best hotels</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Easy to use</h5>
                        <p class="card-text">Book and manage with the click of a button</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
