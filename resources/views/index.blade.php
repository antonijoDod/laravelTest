@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="https://www.consapevolezzadinamica.it/wp-content/uploads/2014/12/Stress-Free_1.jpg" alt="" class="card-img">
                <div class="card-img-overlay">
                    <div class="bg-secondary text-light p-2 rounded">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img" src="https://static1.squarespace.com/static/5602e09be4b053956b5c8d3a/t/5602ff3ce4b0c9642cfa8fed/1443036995229/Winners4_photo.jpg?format=2500w" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <img class="card-img" src="http://croatia.hr/sites/default/files/styles/image_full_width/public/2017-08/01_01_slide_nature.jpg?itok=NOMtH0PJ" alt="">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text">Last updated 3 mins ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <ul class="list-group">
        @foreach ($posts as $post)
            <li class="list-group-item">{{$post->name}}</li>
        @endforeach
        </ul>
        <hr>
        <ul class="list-group">
            @foreach ($mojipostovi as $mojpost)
                <li class="list-group-item">{{$mojpost->title}}</li>
            @endforeach
        </ul>
        <hr>     
</div>
@endsection 