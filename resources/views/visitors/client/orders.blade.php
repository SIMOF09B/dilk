
@extends('layouts.app')
@section('content')
<section style="background-image: url(assets/images/menu-bg.png);"
class="our-menu section bg-light repeat-img" id="menu">

<div class="sec-wp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    <h2 class="h2-title">Orders Log<span></h2>
                    <div class="sec-title-shape mb-4">
                        <img src="{{ asset('assets/images/title-shape.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table table-dark table-striped">
        <tr>
            <td>Restaurant</td>
            <td>Total Producs</td>
            <td>Total price</td>
            <td>Status</td>
            <td>Order Date</td>
            <td>Delivery date </td>
        </tr>
        @if($commandes->count() > 0)
            @foreach($commandes as $commande)
            <tr>
                <td>{{$commande->restaurant->name}}</td>
                <td>{{$commande->produit->count()}}</td>
                <td>MAD. {{$commande->prix}}</td>
                <td class="text-muted"><b>{{Str::ucfirst($commande->etat)}}...</b></td>
                <td>{{$commande->created_at->diffForHumans()}}</td>
                <td>{{$commande->updated_at->diffForHumans()}}</td>
            </tr>
            @endforeach
        @endif
    </table>
</div>
</section>
@endsection