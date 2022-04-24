<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-default" style="background: linear-gradient(to right, white, rgb(255, 127, 127))">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CanKe Design</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/">Anasayfa</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ürünlerimiz
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/kategoriilk">Ahşap</a></li>
            <li><a href="/kategoriiki">Metal</a></li>
            <li><a href="/kategoriuc">Plastik</a></li>
            <li><a href="/kategoridort">Bambu</a></li>
          </ul>
        </li>
        @if(Session::has('user'))
        <li class=""><a href="/myorders">Siparişler</a></li>
        @else
        @endif
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Ara">
        </div>
        <button type="submit" class="btn btn-default">Ara</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li><a href="/cartlist">Sepetim({{ $total }})</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/kullanicisayfasi">Profilim</a></li>
            <li><a href="/logout">Çıkış</a></li>
          </ul>
        </li>
        @else
        <li><a href="/login">Üye Girişi</a></li>
        <li><a href="/register">Üye Ol</a></li>
        <li><a href="/adminlog">Admin</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>