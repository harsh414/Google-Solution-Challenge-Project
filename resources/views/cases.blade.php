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
                    <h2>Cases so far</h2>
                </div>
            </div>
        </div>
    </section>
    <h3 style="text-align: center; color:#002633; font-family: Raleway; letter-spacing: 1px; margin-top: 2rem; ">
        The following  table consist of all the cases of child slavery we have received so far </br>
        The cases on the top of the table are the most frequent one's and require's great attention.<br><br>
        The Aim is to provide this information to the top NGO's so that these child could be take care off !!!
    </h3>

    <table class="table table-striped" style="margin-top: 2rem; margin-bottom: 15rem;" >

        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"  style="color:#0c5460">Name of informer</th>
            {{--            <th scope="col" style="color:#0c5460">Contact Informer</th>--}}
            <th scope="col" style="color:#0c5460">Address of place of child slavery</th>
            <th scope="col" style="color:#0c5460">Description of case</th>
        </tr>
        </thead>
        <tbody>
        <?php $count=1 ?>
        @foreach($informer as $inform)
            <tr>
                <th scope="row">{{$count}}</th>
                <td>{{$inform->name}}</td>
                {{--            <td>{{$inform->contact}}</td>--}}
                <td>{{$inform->address}}</td>
                <td>{{$inform->description}}</td>
            </tr>
            <?php $count=$count+1 ?>
        @endforeach
        </tbody>
    </table>

@endsection
