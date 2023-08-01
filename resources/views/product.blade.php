@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div id="carouselExampleFade" class="carousel slide carousel-fade bg-secondary" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="slider_img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h3 class="text-light">{{$item['name']}}</h3>
                        <p class="text-light">{{$item['description']}}</p>
                    </div>
                    </a>
                  </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="trending_wrapper m-3">
            <h1>Trending Products</h1>
            <div class="">
              @foreach ($products as $item)
              <div class="trending_item">
                  <a href="detail/{{$item['id']}}">
                    <img class="trending_img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                  <div class="">
                      <h3 class="text-dark">{{$item['name']}}</h3>

                  </div>
                  </a>
                </div>
              @endforeach

          </div>
          </div>
    </div>
</div>
@endsection
