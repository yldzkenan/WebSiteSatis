@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filtrele</a>
    </div>
    <div class="col-sm-9">
        <div class="trending-wrapper">
            <h4>Sonuçlar:</h4>
            @foreach ($products as $item)
            <div class="searched-item">
              <a href="detail/{{ $item['id'] }}">
              <img class="trending-images" src="{{ $item['gallery'] }}">
              <div class="">
                <h2>{{ $item['name'] }}</h2>
                <h5>{{ $item['description'] }}</h5>
              </div>
              </a>
            </div>
            @endforeach
          </div>
    </div>
</div>
@endsection