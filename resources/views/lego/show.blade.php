@extends("layouts.main")
@section("content")
<div class="card">
        <div class="card-header">
            LEGO Információk
        </div>
        <div class="card-body">
            <h5 class="card-title">Termék kódja: {{ $lego['code'] }}</h5>
            <p class="card-text">Termék neve: {{ $lego['name'] }}</p>
            <p class="card-text">Ár: {{ $lego['price'] }} Ft</p>
            <p class="card-text">Darabszám: {{ $lego['pieces'] }}</p>
        </div>
        <hr>
        <h2>Comments</h2>
        @foreach($lego->review as $review)
        @if($review->comment!=null)
        <div class="card-body">
            <h3>{{$review->user->name}} - 
            @for($i=1;$i<6;$i++) 
                <span class="fa fa-star {{$review->rating>=$i?' checked ':' '}}"></span>
            @endfor
        </h3>
            {{$review->comment}}
            
        </div>
        @endif
        @endforeach
    </div>
@endsection