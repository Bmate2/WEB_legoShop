@extends("layouts.main")
@section("content")

<script>
function doReview(element) {
    if("{!!Auth::user()!=null!!}"){
    Swal.fire({
        title: 'Add your comment',
        input: 'textarea',
        inputAttributes: {
            autocapitalize: 'off'
        },
        showCancelButton: true,
        confirmButtonText: 'Submit',
        showLoaderOnConfirm: true,
        preConfirm: (comment) => {
            return comment;
        }
    }).then((result) => {
        if (result.isConfirmed) {
            sendReview(element, result.value);
        }
    });
}
else{
    window.location.href="{!!route('loginView')!!}"
}
}

function sendReview(element, comment) {
    var form = element.parentNode;
    var formData = new FormData(form);
    var code = form.querySelector('input[name="code"]').value;
    var rating = form.querySelector('input[name="rating"]').value;
    formData.append('code', code);
    formData.append('rating', rating);
    formData.append('comment', comment); 

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "{{route('rate_lego')}}", true);
    xhr.setRequestHeader('X-CSRF-Token', '{{ csrf_token() }}');

    xhr.onload = function() {

        if (xhr.status === 200 ) {
            var successfully=JSON.parse(xhr.response).success;
            if(successfully){
                showResult(true, "Sikeres értékelés!", element);
            updateRating(element.parentNode.parentNode,code,JSON.parse(xhr.response).rating);
            }
            else{
                showResult(false,"Már értékelted ezt a LEGO-t!");
            }
        } else {
            showResult(false, "Szerverhiba történt!" ,element);
        }
    };

    xhr.send(formData);
}

function showResult(success, message,element = null) {
    Swal.fire({
        title: message,
        width: 600,
        padding: "3em",
        color: success ? "green" : "red",
        backdrop: `
    rgba(0,0,123,0.4)
    url("https://sweetalert2.github.io/images/nyan-cat.gif")
    left top
    no-repeat
  `
    });
}

function updateRating(element, code, rating) {
    var oldElement = element;
    var innerHTML = `
        ${rating}&ThinSpace;
        `;
    for (var i = 1; i < 6; i++) {
        innerHTML += `
            <form class="rateForm" data-code="${code}" data-rating="${i}">
                <input type="hidden" value="${code}" name="code">
                <input type="hidden" value="${i}" name="rating">
                <span onclick="doReview(this)" class="fa fa-star ${rating >= i ? 'checked' : ''}"></span>
            </form>
        `;
    }
    element.innerHTML = innerHTML;
}

    function setForms(){
        var ratingForms = document.getElementsByName("ratingForm");
    for (var j = 0; j < ratingForms.length; j++) {
        ratingForms[j].disabled = true;
    }
    }

</script>
@foreach($lego as $value)
<div class="card w-100 mb-3">
    <div class="card-body">
        <!-- <img src="{{ asset($value->image) }}" alt="{{ $value->name }}" class="img-fluid mb-3"> -->
        <h2 class="card-title">{{$value->name}} {{$value->code}}</h2>
        <p class="card-text">{{$value->category->name}}</p>
        <p class="card-text">{{$value->price}} Ft</p>
        <div class="d-flex flex-column">
            <a href="{{route('lego_comments',$value->code)}}" class="btn btn-primary btnBuy mb-2">Comments</a>
            <div class="row btnRev">
                {{$value->rating}}
                &ThinSpace;
                @for($i=1;$i<6;$i++) <form class="rateForm" name="ratingForm" data-code="{{$value->id}}" data-rating='{{$i}}'>
                    @csrf
                    <span onclick="doReview(this)" class="fa fa-star {{$value->rating>=$i?' checked ':' '}}"></span>
                    <input type="hidden" value="{{$value->id}}" name="code">
                    <input type="hidden" value="{{$i}}" name="rating">
                    </form>
                    @endfor
            </div>
            @if(Auth::check() && Auth::user()->role=='A')
            <a href="{{route("show_edit_lego",$value->code)}}"
                class="btn btn-primary btnEdit mb-2 btn-edit-narrow">Edit</a>
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

@if(!Auth::user())
<script>
    setForms();
</script>
@endif

{{ $lego->render('vendor.custom') }}
@endsection