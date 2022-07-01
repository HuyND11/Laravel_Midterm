@extends('layouts.mainLayout')

@section('title', 'Food Detail')

@section('content')
    <div class="text-align-center">
        <p class="fs-1 fw-bolder">Detail {{$food->name}}</p>
        <div class="row justify-content-center ">
            <div class="col-6">
                <img style="width: 100%; height: 25rem" class="img-fluid" src="/images/{{$food->image}}" alt="">
            </div>
            <div class="col-6">
                <p class="fs-2 fw-bolder "> {{$food->name}}</p>
                <div class="row justify-content-evenly">
                    <p class="card-text col-6 fs-4 text-success">{{$food->discountPrice}} Vnd</p>
                    <p class="card-text col-6 fs-5 text-decoration-line-through">{{$food->price}} Vnd</p>
                </div>
                <div class="text-wrap">
                    {{$food->description}}
                </div>
                <button class="btn btn-primary">Add To Cart</button>
            </div>
        </div>
    </div>
@endsection
