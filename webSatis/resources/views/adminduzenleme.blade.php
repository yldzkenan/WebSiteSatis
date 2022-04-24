@extends('adminmaster')
@section("admincontent")
<br><br>
<div class="container costum-login">
    <div class="row">
        <div class="col-sm-20 col-sm-offset-20">
            <form action="/admingoster/duzenle/{{ Request::segment(3) }}" method="POST">
                @csrf
                <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" value="{{ $admin_bilgileri->id }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ad Soyad</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $admin_bilgileri->name }}">
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $admin_bilgileri->email }}">
                </div>
                <button type="submit" class="btn btn-default">Güncelle</button>
              </form>
        </div>
    </div>
</div>
@endsection