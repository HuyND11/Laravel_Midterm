@extends('layouts.mainLayout')

@section('title', 'NDH Food Store')

@section('content')
    <div>
        <p class="fs-1">Food Store</p>
        <a href="/food/create" class="btn btn-secondary">Create</a>
        <div class="row justify-content-center gap-3" >
            @foreach ($listFood as $food)
                <div class="card col-4" style="width: 18rem;">
                    <img src="/images/{{$food->image}}" class="card-img-top"  style="height: 12rem; width: 100% " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$food->name}}</h5>
                        <p class="card-text text-truncate" >{{$food->description}}</p>
                        <div class="row">
                            <p class="card-text col-6">{{$food->discountPrice}}</p>
                            <p class="card-text col-6 text-decoration-line-through">{{$food->price}}</p>
                        </div>
                        <a href="/food/{{$food->id}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
