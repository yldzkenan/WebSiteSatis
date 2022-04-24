@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Ürün Toplam Fiyatı:</td>
                <td>{{ $total }} TRY</td>
              </tr>
              <tr>
                <td>Vergi:</td>
                <td>{{ $total*0.18 }} TRY (%18 KDV)</td>
              </tr>
              <tr>
                <td>Kargo Ücreti</td>
                <td>Ücretsiz Kargo </td>
              </tr>
              <tr>
                <td>Toplam Tutar:</td>
                <td>{{ $total+($total*0.18) }} TRY</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Adresinizi Giriniz" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <p><label>Ödeme Yöntemini Seçiniz:</label></p>
                  <p><input type="radio" value="cash" name="payment"><span>Online Ödeme</span></p>
                  <p><input type="radio" value="cash" name="payment"><span>Telefonla Ödeme</span></p>
                  <p><input type="radio" value="cash" name="payment"><span>Kapıda Ödeme</span></p>
                  
                </div>
                <button type="submit" class="btn btn-success">Siparişi Onayla</button>
              </form>
          </div>
    </div>
</div>
@endsection