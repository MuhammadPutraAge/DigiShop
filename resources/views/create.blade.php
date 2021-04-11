@extends('layouts.main')

@section('content')
    <h1 class="heading-title">Tambah Produk</h1>

    <form action="#" method="POST" class="form">
      <div class="form-group">
        <label for="name" class="form-label">Nama Produk:</label>
        <input type="text" id="name" name="name" class="form-input">
      </div>

      <div class="form-group">
        <label for="image" class="form-label">Foto Produk:</label>
        <input type="file" id="image" name="image" class="form-input-file">
      </div>

      <div class="form-group">
        <label for="price" class="form-label">Harga Produk:</label>
        <input type="number" id="price" name="price" class="form-input">
      </div>

      <div class="form-group">
        <label for="qty" class="form-label">Stok Produk:</label>
        <input type="number" id="qty" name="qty" class="form-input">
      </div>

      <div class="form-group">
        <label for="description" class="form-label">Deskripsi Produk:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-input"></textarea>
      </div>

      <button type="submit" class="form-button">Tambah Produk</button>

    </form>
@endsection