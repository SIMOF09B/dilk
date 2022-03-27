
@extends('layouts.app')
@section('content')
<section style="background-image: url(assets/images/menu-bg.png);"
class="our-menu section bg-light repeat-img" id="menu">
<div class="sec-wp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    <p class="sec-sub-title mb-3">{{$restaurant->name}}</p>
                    <h2 class="h2-title">{{$restaurant->adresse}}, <span><br>{{$restaurant->tele}} </span></h2>
                    <span>Comments (<i class="fas fa-comments text-warning"></i> {{$restaurant->comments->count()}})</span>
                    <span class="ms-4">Orders (<i class="fas fa-concierge-bell"></i> {{$restaurant->commande->count()}})</span>
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
    @comments(['model' => $restaurant])
</div>
</div>
</section>
@endsection
    