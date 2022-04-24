@extends('adminmaster')
@section("admincontent")

    <br><br><br>
<div class="container costum-login">
    <div class="row">
        <div class="col-sm-20 col-sm-offset-20">
            <form action="/adminurunler/duzenle/{{ Request::segment(3) }}" method="POST">
                @csrf
                    <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="{{ $urun_bilgileri->id }}" required>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ürün Ad: </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $urun_bilgileri->name }}" required>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ürün Fiyat: </label>
                  <input type="number" name="price" class="form-control" id="exampleInputEmail1" value="{{ $urun_bilgileri->price }}" required>
                </div>
                <div class="form-group">
                  <label for="category">Kategori: </label>
                  <input list="categorys" name="category" id="category" type="select" value="{{ $urun_bilgileri->category }}" required>
                  <datalist id="categorys">
                    <option value="Ahsap">
                    <option value="Metal">
                    <option value="Plastik">
                    <option value="Bambu">
                  </datalist>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama: </label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{ $urun_bilgileri->description }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Resim link: </label>
                    <input type="text" name="gallery" class="form-control" id="exampleInputPassword1" value="{{ $urun_bilgileri->gallery }}" required>
                  </div>
                <button type="submit" class="btn btn-default">Ürün Güncelle</button>
              </form>
        </div>
    </div>
</div>
@endsection