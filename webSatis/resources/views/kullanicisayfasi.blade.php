@extends('master')
@section("content")

@if(Session::has('user'))
        <div class="w3-content w3-container w3-padding-64" id="about">
          <h3 class="w3-center">Hoşgeldin, <br>{{ Session::get('user')['name'] }}</h3>
          <p class="w3-center"><em>Mail adresin: </em>{{ Session::get('user')['email'] }}</p>
          <p style="font-weight:bold; color:black;">Gizliliğinizi önemsiyoruz.<br/>
            Başta AB olmak üzere, uluslararası veri gizliliği standartları geliştikçe, kullanıcılarımızın veri gizliliği haklarını kullanmalarını kolaylaştırmak için politikamızı güncelledik.<br>
            Tüm kullanıcılarımıza Güvenlik ve Gizlilik Geliştimelerimizi ve güncellenen Gizlilik Politikamızı incelemelerini öneriyoruz.</p>
          <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <a href="/">
              <button type="submit" class="btn btn-info">Alışverişe Dön</button>
               </a>

               <a href="/cartlist">
                <button type="submit" class="btn btn-light">Sepetim</button>
                </a>

                 <a href="/myorders">
                    <button type="submit" class="btn btn-primary">Siparişlerim</button>
                </a>
            </div>
          </div>
          @endif


          <div class="container costum-login">
            <div class="row">
                <div class="col-sm-20 col-sm-offset-20">
                    <form action="/kullanicisayfasi/duzenle/{{ Session::get('user')['id'] }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="{{ Session::get('user')['id'] }}" required>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ad Soyad</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ Session::get('user')['name'] }}" required>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ Session::get('user')['email'] }}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Şifre:</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" required>
                          </div>
                        <button type="submit" class="btn btn-warning">Güncelle</button>
                      </form>
                </div>
            </div>
        </div>
          <br><br><br><br>
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
      height: 100%;
      color: white;
      line-height: 1.8;
    }
    </style>
@endsection