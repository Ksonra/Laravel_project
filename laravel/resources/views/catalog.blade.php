@extends('layouts.base')
@section('content')


  <section class="category" id="category">
    <h1 class="heading"> {{$catalog->name}} </h1>

    <div class="box-container">
        @foreach ($catalog->products as $product)


      <div class="box">
        <img src="/storage/{{$product->picture}}" alt="" />{{-- <img src="images/Броши.png" alt="" /> --}}
        <div class="content">
          <h3>{{$product->name}}</h3>
          @if ($product->discount)
          <h3 class="strike">{{$product->price}}$</h3>
          <h3>{{$product->price-(($product->price*$product->discount)/100)}}$</h3>
          @else
          <h3 class="price">{{$product->price}}$</h3>
          @endif
          <a href="{{asset('product/'.$product->id)}}" class="btn">Описание</a>
        </div>
      </div>
      @endforeach

    </div>
  </section>


@endsection
