@extends('layouts.app')
@section('content')
<div class="container">

<div class="card mt-3 mb-3">
    <div class="card-body">
      <h4 class="card-title">{{$data->name}}</h4>
      <p class="card-text">{{$data->adresse}}</p>
      <h5 class="card-title">{{$data->tele}}</h5>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
@foreach ($data->categorie as $categ)
<div class="card mt-3">
    <div class="card-header" style="background: #fff">
        <h3>{{$categ->name}}</h3>
    </div>
    <div class="card-body">
        <div class="row">
        @foreach ($categ->produit as $item)
        <div class="col-md-3">
        <div class="card mt-3">
            <img src="{{asset('products/'.$item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">{{$item->name}}</h4>
              <p class="card-text">{{$item->desc}}</p>
              <h5 class="card-title"> {{$item->prix}}, 00DH</h5>
              <small><i class="far fa-clock"></i> {{$item->duree_preparation}} min</small>
              <br>
              <a data-name="{{$item->name}}" data-id="{{$item->id}}" class="btn btn-primary add-commande text-center mt-3">+</a>
            </div>
        </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>
  @endforeach


</div>
<div class="col-md-3">
    <div class="card mt-3" style="border:solid #00a082 1px;">
        <div class="card-header" style="background:#00a082;">
            <h5 class="text-light">Commandes Lits</h5>
        </div>
        <div class="card-body" id="panel">
           
        </div>
    </div>
</div>
</div>
    
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function(){
        const data = [
            {
            }
        ];
        $('.add-commande').click(function(){ 
            let prod = $(this).attr('data-name');
            data.push({
            });
            $('#panel').append(prod + " </br>");
            
            console.log(data);
        });

        var NewArray = data.filter(function(element,index,self){
            return index === self.indexOf(element); 
        });

        console.log(NewArray);
    });
</script>