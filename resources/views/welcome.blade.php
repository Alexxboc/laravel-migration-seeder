@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="row row-cols-2 gy-5">
        @foreach($travel as $single_travel)
        <div class="col">
            <div class="card text-center">
                <img class="img-fluid" src="{{$single_travel->image}}" alt="{{$single_travel->city}}">
                <div class="card-body">
                    <h4 class="card-title">{{$single_travel->title}}</h4>
                    <p class="card-text">{{$single_travel->description}}</p>
                    <strong class="text-danger text-center">€{{$single_travel->price}}</strong>
                    <h3 class="text-center text-uppercase">{{$single_travel->location}}</h3>
                    <div class="div text-center">
                        <h3 class="text-danger">{{$single_travel->type}}</h3>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop