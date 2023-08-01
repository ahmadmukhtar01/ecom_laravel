@extends('master')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">

            <h3>Name : <span class="fw-light">{{$product['name']}}</span></h3>
            <h3>Price : <span class="fw-light">{{$product['price']}}</span></h3>
            <h3>Category : <span class="fw-light">{{$product['category']}}</span></h3>
            <h3>Description : <span class="fw-light">{{$product['description']}}</span></h3>

            <div class="d-flex">
                <button class="btn btn-success me-3">Add to cart</button>
                <button class="btn btn-primary">Buy Now</button>
                <a href="/" class="float-end btn btn-info ms-3">Go Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
