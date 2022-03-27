@extends('backoffice.layouts.app')
@section('content')


<div class="card">
    <div class="card-header">
        <a class="btn btn-dark rounded-pill " href="{{route('restaurant.add')}}">Add</a>

    </div>
    <div class="card-body">
    {{-- <input type="search" class="form-control form-control-sm" placeholder="Search Data..." value=""><button class="btn btn-primary">Search</button> --}}
        <table  class="table w-100 table->striped thead-primary dataTable no-footer" role="grid"  style="width: 1098px;">
            
            <thead class="bg-danger text-white">
            <tr role="row">
                <th > Name</th>
                <th >Address</th>
                <th >Phone Number</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                <tr>
                   
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->adresse}}</td>
                    <td>{{$restaurant->tele}}</td>
                    <td> <a class="text-left mr-2 text-secondary" href="{{route('restaurant.show',['id' => $restaurant->id])}}"><i class="fa fa-eye"></i></a>
                    <a class="text-left mr-2 text-info"  href="{{route('restaurant.edit',['id' => $restaurant->id])}}"><i class="fa fa-edit"></i></a>
                    <a class="text-left mr-2 text-danger" onclick="return confirm('Are you sure ??')" href="{{route('restaurant.delete',['id' => $restaurant->id])}}"><i class="fa fa-trash"></i></a> </td>
           
                  
                    <tr>
                        @endforeach
            </tbody>
          </table>
      </div>
</div>
  
    @endsection