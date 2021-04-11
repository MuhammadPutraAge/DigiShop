<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>DigiShop</title>
</head>
<body>
  <header>
    <nav>
      <h1 class="brand-logo"><span>Digi</span>Shop</h1>

      <ul>
        <li><a href="/" class="menu-item">Semua Produk</a></li>
        <li><a href="/" class="menu-item">Tambah Produk</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    @yield('content')
  </main>
</body>
</html>