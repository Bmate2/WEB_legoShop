@extends("layouts.main")
@section("content")
<style>
.card {
    background: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
}

.btnRev {
    background-color: #ff5722;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 20px;
    font-size: 16px;
    cursor: pointer;
    position: absolute;
    top: 20px;
    right: 10px;
}

.btnBuy {
    background-color: #ff5722;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 8px 20px;
    font-size: 16px;
    cursor: pointer;
    position: absolute;
    bottom: 20px;
    right: 10px;
}
.btn-edit-narrow {
    width: 70px;
}
</style>
@foreach($lego as $value)
<div class="card w-100 mb-3">
    <div class="card-body">
        <img src="{{ asset($value->image) }}" alt="{{ $value->name }}" class="img-fluid mb-3">
        <h2 class="card-title">{{$value->name}}</h2>
        <p class="card-text">{{$value->category->name}}</p>
        <p class="card-text">{{$value->price}} Ft</p>
        <div class="d-flex flex-column">
            <a href="#" class="btn btn-primary btnBuy mb-2"><i class="fa fa-shopping-cart"></i> Buy</a>
            <a href="{{route("show_lego",$value->code)}}" class="btn btn-danger btnRev mb-2">Review</a>
            @if(Auth::check() && Auth::user()->role=='A')
            <a href="{{route("show_edit_lego",$value->code)}}" class="btn btn-primary btnEdit mb-2 btn-edit-narrow">Edit</a>
            <form action="{{route("delete_lego",$value->code)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            @endif
        </div>
    </div>
</div>
@endforeach

{{ $lego->render('vendor.custom') }}
@endsection
