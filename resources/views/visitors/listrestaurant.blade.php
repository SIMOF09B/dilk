
@extends('layouts.app')
@section('content')
<section style="background-image: url(assets/images/menu-bg.png);"
class="our-menu section bg-light repeat-img" id="menu">
<div class="sec-wp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    <p class="sec-sub-title mb-3">our restaurants</p>
                    <h2 class="h2-title">Fats Foods, <span><br>Until your home </span></h2>
                    <div class="sec-title-shape mb-4">
                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
@foreach ($restaurant as $rest)
<div class="col sm-4">
  <div class="card mb-3 shadow bg-light" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('img/rest.jpg')}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$rest->name}}</h5>
          <p class="card-text">{{$rest->adresse}}</p>
          <p class="card-text"><small class="text-muted">{{$rest->tele}}</small></p>
          <a class="d-inline" href="{{route('rest.show',['restaurant'=>$rest])}}">Review <i class="far fa-comment"></i></a>
          <a class="d-inline ms-3 text-right" href="{{route('produitC.show',['restaurant' => $rest])}}">Menu <i class="fa fa-utensils"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>
</div>
</section>
@endsection