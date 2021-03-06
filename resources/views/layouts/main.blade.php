<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>DIGISHOP</title>
</head>
<body>
  <header>
    <nav>
      <a href="{{ route('products.index') }}" class="brand-logo"><span>DIGI</span>SHOP</a>

      <ul>
        <li>
          <a href="{{ route('products.index') }}" class="menu-item {{ request()->routeIs('products.index') ? 'menu-active' : '' }}">
            Semua Produk
          </a>
        </li>
        <li>
          <a href="{{ route('products.add') }}" class="menu-item {{ request()->routeIs('products.add') ? 'menu-active' : '' }}">
            Tambah Produk
          </a>
        </li>
      </ul>
    </nav>
  </header>
  
  <main>
    @yield('content')
  </main>
</body>
</html>