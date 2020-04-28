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
                    <h2>Register yourself
                        <br>
                        as a volunteer</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="margin-top: 2rem; margin-bottom: 2rem;">
        <h3 style="text-align: center; color:#002633; font-family: Raleway; letter-spacing: 1px ">
            Enlight The life of someone and be the reason for their smile<br>
            Register here...
        </h3>
        <div class="container" style="background:darkmagenta">
            <div class="jumbotron">
                <h4>
                    @if(session('message2'))
                        <div>
                            <p style="text-align: center;color: #0c5460">{{session('message2')}}</p>
                        </div>
                    @endif
                </h4>
                <form action="{{ route('goregis') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        @foreach($errors->get('name') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" name="name"
                               style="box-shadow:6px 3px 3px #9999ff;">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        @foreach($errors->get('email') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="email" name="email" class="form-control" placeholder="Please enter your email.."
                               style="box-shadow:6px 3px 3px #9999ff;">
                    </div>
                    <div class="form-group">
                        <label for="number">Contact Number</label>
                        @foreach($errors->get('contact') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="tel" name="contact" class="form-control" placeholder="Your contact number.."
                               style="box-shadow:6px 3px 3px #9999ff;">
                    </div>

                    <div class="form-group">
                        <label for="address">Residential Address</label>
                        @foreach($errors->get('address') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                               placeholder="Please enter your address here..." name="address"
                               style="box-shadow:6px 3px 3px #9999ff;"></input>
                    </div>

                    <div class="form-group">
                        <h3 style="font-size: 20px; font-weight: 200;letter-spacing: 2px">
                            <label for="description">Reason for becoming volunteer</label></h3>
                        @foreach($errors->get('description') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                  style="box-shadow:6px 3px 3px #9999ff;"
                                  placeholder="Tell us why u want to be a volunteer and how can u help.." rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="opt">Will u be able to help financially ? (Yes/No)</label>
                        <div class="control">
                            <input type="text" name="opt" class="form-control" placeholder="Yes/No">
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 4rem;">
                        <label for="timeoften">How often are u available..?</label>
                        @foreach($errors->get('timeoften') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                  style="box-shadow:6px 3px 3px #9999ff;"
                                  placeholder="Give us an idea about the time for which u would be available during the week" rows="3" name="timeoften"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="button btn-primary" name="button">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('head')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css">
@endsection

