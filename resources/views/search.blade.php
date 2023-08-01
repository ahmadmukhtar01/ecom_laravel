@extends('master')
@section('content')
<div class="custom-product mt-5">
    <div class="row">
        <div class="col-sm-4 ms-3">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending_wrapper m-3">
                <h4>Result Products</h4>
                  @foreach ($products as $item)
                  <div class="searched_item">
                      <a href="detail/{{$item['id']}}">
                        <img class="trending_img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
                      <div class="">
                          <h3 class="text-dark">{{$item['name']}}</h3>
                          <h3 class="text-dark">{{$item['description']}}</h3>

                      </div>
                      </a>
                    </div>
                  @endforeach

              </div>
        </div>
    </div>
</div>
@endsection
