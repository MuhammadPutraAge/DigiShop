@extends('layouts.main')

@section('content')
    <h1 class="heading-title">Semua Produk</h1>

    <div class="card-container">
      @foreach ($products as $product)
        <a href="#" class="card">
          <div class="card-img-container">
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product 1" class="card-img">
          </div>

          <div class="card-details">
            <h3 class="card-title">{{ $product->name }}</h3>
            <div>
              <p class="card-price">Rp. {{ number_format($product->price, 0, ',', '.', ) }}</p>
              <p class="card-stock">Stok: {{ $product->qty }}</p>
            </div>
            <p class="card-description">{{ $product->description }}</p>
          </div>
        </a>          
      @endforeach
    </div>
  </div>
@endsection