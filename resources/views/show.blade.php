@extends('layouts.main')

@section('content')
    <h1 class="heading-title">Sunting Data Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="form">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name" class="form-label">Nama Produk:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-input">
        @error('name')
            <small class="error">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="image" class="form-label">Foto Produk:</label>
        <input type="file" id="image" name="image" class="form-input-file">
        @error('image')
            <small class="error">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="price" class="form-label">Harga Produk:</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}" class="form-input">
        @error('price')
            <small class="error">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="qty" class="form-label">Stok Produk:</label>
        <input type="number" id="qty" name="qty" value="{{ $product->qty }}" class="form-input">
        @error('qty')
            <small class="error">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group">
        <label for="description" class="form-label">Deskripsi Produk:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-input">{{ $product->description }}</textarea>
        @error('description')
            <small class="error">{{ $message }}</small>
        @enderror
      </div>

      <div class="form-group-button">
        <button type="submit" class="form-button-secondary">Hapus Produk</button>
        <button type="submit" class="form-button">Sunting Produk</button>
      </div>

    </form>
@endsection