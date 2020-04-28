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
                    <h2>Inform Us</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="margin-top: 2rem; margin-bottom: 2rem;">
        <h3 style="text-align: center; color:#002633; font-family: Raleway; letter-spacing: 1px ">
            Leave a short description of the place engaging children in slavery and child labour
        </h3>
        <div class="container" style="background:#0088cc">
            <div class="jumbotron">
                <h4>
                    @if(session('message'))
                        <div>
                            <p style="text-align: center;color: #0c5460">{{session('message')}}</p>
                        </div>
                    @endif
                </h4>
                <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
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
                        <input type="email" name="email" class="form-control" placeholder="Please enter your email.." style="box-shadow:6px 3px 3px #9999ff;">
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
                        <label for="address">Locality Address</label>
                        @foreach($errors->get('address') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="text" class="form-control" id="exampleFormControlTextarea1"
                               placeholder="Enter the locality of area engaging children in act of slavery" name="address"
                               style="box-shadow:6px 3px 3px #9999ff;"></input>
                    </div>

                    <div class="form-group">
                        <h3 style="font-size: 20px; font-weight: 200;letter-spacing: 2px">
                            <label for="description">Short Description</label></h3>
                        @foreach($errors->get('description') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                  style="box-shadow:6px 3px 3px #9999ff;"
                                  placeholder="Leave a short description of activities the children were involved in" rows="6"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload a image of act or the area</label>
                        @foreach($errors->get('image') as $error)
                            <p style="color:indianred">{{ $error }}</p>
                        @endforeach
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <button class="button btn-primary" name="button">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection



