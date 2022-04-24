@extends('adminmaster')
@section("admincontent")
        <div class="info">
          <div>
            <table>
              <thead>
                <tr>
                  <th>Güncelle</th>
                  <th>Ürün</th>
                  <th>Fiyat</th>
                  <th>Kategori</th>
                  <th>Açıklama</th>
                  <th>Resim</th>
                  <th>Kaldır</th>

                </tr>
              </thead>
              <?php foreach ($tum_urunler as $row) {?>
              <tbody>
                <tr>
                  <td><a href="/adminurunler/duzenle/{{ $row->id }}">G</a></td>
                  <td style="color: red">{{ $row->name }}</td>
                  <td>{{ $row->price }} TRY</td>
                  <td>{{ $row->category }}</td>
                  <td>{{ $row->description }}</td>
                  <td><img class="slider-img" src="{{ $row->gallery }}" width="200" height="200"></td>
                  <td style="text-align:center;"><a href="/adminurunler/sil/{{ $row->id }}">X</a></td>

                </tr>
              </tbody>
              <?php } ?>
            </table>
          
        </div>
      </div>
      <div>
        <a href="/adminurunler/ekle"><button>Ürün Ekle</button></a>
      </div>
      
@endsection
