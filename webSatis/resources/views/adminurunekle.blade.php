@extends('adminmaster')
@section("admincontent")

    <br><br><br>
<div class="container costum-login">
    <div class="row">
        <div class="col-sm-20 col-sm-offset-20">
            <form action="/adminurunler/ekle" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Ürün Ad: </label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ad" required>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ürün Fiyat: </label>
                  <input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Fiyat" required>
                </div>
                <div class="form-group">
                  <label for="category">Kategori: </label>
                  <input list="categorys" name="category" id="category" type="select" placeholder="Kategori" required>
                  <datalist id="categorys">
                    <option value="Ahsap">
                    <option value="Metal">
                    <option value="Plastik">
                    <option value="Bambu">
                  </datalist>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Açıklama: </label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Açıklama" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Resim link: </label>
                    <input type="text" name="gallery" class="form-control" id="exampleInputPassword1" placeholder="Resim link" required>
                  </div>
                <button type="submit" class="btn btn-default">Ürün Ekle</button>
              </form>
        </div>
    </div>
</div>
@endsection