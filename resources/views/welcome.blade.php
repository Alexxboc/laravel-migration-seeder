@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-2">
        @foreach($travel as $single_travel)
        <div class="col">
            <div class="card">
                <img class="img-fluid" src="{{$single_travel->image}}" alt="{{$single_travel->city}}">
                <div class="card-body">
                    <h4 class="card-title">{{$single_travel->title}}</h4>
                    <p class="card-text">{{$single_travel->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop