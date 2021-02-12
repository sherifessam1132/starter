
@extends('layout.protfolio')


<!-- ======= Mobile nav toggle button ======= -->


<!-- ======= Header ======= -->

<!-- End Header -->

<!-- ======= Hero Section ======= -->

@section('content')
    <div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">{{$data}}</a>
        </div>
    </div>
    </div>
@stop

<!-- ======= Footer ======= -->



