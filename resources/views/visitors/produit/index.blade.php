@extends('layouts.app')
@section('content')
    <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">our menu</p>
                                    <h2 class="h2-title">{{$data->name}}, <span>{{$data->adresse}}<br> {{$data->tele}}</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                             @foreach ($data->categorie as $categ)
                                            <li class="filter" data-filter=".all, .breakfast, .lunch, .dinner">
                                                <a href="#{{$categ->name}}"><img src="{{ asset('assets/images/menu-1.png') }}" alt="">
                                                {{$categ->name}}</a>
                                            </li>
                                            @endforeach
                                            {{-- <li class="filter" data-filter=".breakfast">
                                                <img src="{{ asset('assets/images/menu-2.png') }}" alt="">
                                                Breakfast
                                            </li>
                                            <li class="filter" data-filter=".lunch">
                                                <img src="{{ asset('assets/images/menu-3.png') }}" alt="">
                                                Lunch
                                            </li>
                                            <li class="filter" data-filter=".dinner">
                                                <img src="{{ asset('assets/images/menu-4.png') }}" alt="">
                                                Dinner
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            @foreach ($data->categorie as $categ)
                            <div id="{{$categ->name}}"></div>
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                @foreach ($categ->produit as $item)
                                <div class="col-lg-4 col-sm-6 dish-box-wp breakfast" data-cat="breakfast">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ asset('products/'.$item->image) }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">{{$item->name}}</h3>
                                            <p><i class="fa fa-clock"></i> {{$item->duree_preparation}}.min</p>
                                        </div>
                                        <div class="dish-info">
                                            {{$item->desc}}
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>MAD. {{$item->prix}}</b>
                                                </li>
                                                <li>
                                                    <a href="{{route('AddToCart',['produit' => $item])}}" class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
@endsection
