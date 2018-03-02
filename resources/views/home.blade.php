@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row header-image">

        </div>
    </div>
    <div class="container latest-post">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <img src="https://placeimg.com/750/563/any" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="font-weight-bold text-uppercase card-title">Day 1 - The start of our journey</h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquam consectetur cum
                            dolorum eligendi illum iure nihil nulla quam, quisquam quo rem rerum saepe voluptate.
                            Delectus expedita quae voluptates!
                        </p>
                        <a href="" class="btn btn-outline-dark">Read More</a>
                    </div>
                </div>
                <div class="text-center my-5">
                    <a href="" class="btn btn-outline-warning">More Stories?</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="font-weight-bold text-center">What is this all about?</h2>
                <p>
                    Welcome to my blog about my journey to Everest Base Camp. September 18th of 2018 I'm traveling to Nepal to hike to the base camp of the Mount Everest. I would like to bring you along on this journey by posting a blogpost each day to tell you about our adventure and finding of this journey.
                </p>
                <p>
                    I'll be making this trip with Rik and Roland. Both avid travelers and motivated people and most of all good friends.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 mx-auto my-5 text-center">
                <a href="{{ route('gallery') }}" class="btn btn-outline-warning">Check out the gallery</a>
            </div>
        </div>
    </div>
@endsection
