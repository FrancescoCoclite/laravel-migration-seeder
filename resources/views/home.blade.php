@extends('layout.app')
@section('title','Home')
@section('content')
 <div class="container">
     
    @foreach($viaggi as $viaggio)
     <div class="row">
         <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    {{$viaggio['title']}}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$viaggio['location']}}</h5>
                    <p class="card-text">{{$viaggio['description']}}</p>
                    <a href="#" class="btn btn-primary">{{$viaggio['price']}}Euro</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
                </div>
            </div>
     </div>
     @endforeach
     
 </div>
 
@endsection
