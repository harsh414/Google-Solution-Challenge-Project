@extends('layout2')
@section('style')
    <style>
        body{
            background-image: url("https://thumbs.dreamstime.com/z/vector-abstract-geometric-background-design-element-form-blue-hexagon-vector-abstract-geometric-background-design-element-form-131911559.jpg");
        }
    </style>
@endsection

@section('mysec')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Donate</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="margin-top: 2rem; margin-bottom: 2rem;">
        <h1 style="text-align: center; color:black; font-family: Raleway; letter-spacing: 1px; ">
            Donation Form
        </h1>
        <div class="container" style="background:yellow">
            <div class="jumbotron">
                <form action="{{ route('pay') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        @foreach($errors->get('name') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" name="name" style="border:2px solid yellow">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        @foreach($errors->get('email') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="email" name="email" class="form-control" placeholder="Please enter your email.." style="border:2px solid yellow">
                    </div>
                    <div class="form-group">
                        <label for="number">Contact Number</label>
                        @foreach($errors->get('contact') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="tel" name="contact" class="form-control" placeholder="Your contact number.." style="border:2px solid yellow">
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount in ₹</label>
                        @foreach($errors->get('amount') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                               placeholder="₹" name="amount" style="border:2px solid yellow; width: auto;"></input>
                    </div>

                    <div class="form-group">
                        <h3 style="font-size: 20px; font-weight: 200;letter-spacing: 2px">
                            <label for="description">Reason for Donation</label></h3>
                        @foreach($errors->get('description') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                  style="border:2px solid yellow"
                                  placeholder="Tell us what change u expect from the amount u donated.." rows="6"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="button btn-primary" name="button">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
