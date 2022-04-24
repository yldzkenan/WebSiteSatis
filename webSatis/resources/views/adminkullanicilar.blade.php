@extends('adminmaster')
@section("admincontent")
        <div class="info">
          <div>
            <table>
              <thead>
                <tr>
                  <th>Güncelleme İşlemleri</th>
                  <th>Ad-Soyad</th>
                  <th>Mail</th>
                  <th>Üyelik İptal</th>
                </tr>
              </thead>
              <?php foreach ($tum_kullanicilar as $row) {?>
              <tbody>
                <tr>
                  <td><a href="/adminkullanicilar/duzenle/{{ $row->id }}">Güncelle</a></td>
                  <td style="color: red">{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td style="text-align:center;"><a href="/adminkullanicilar/sil/{{ $row->id }}">X</a></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>         
        </div>
      </div>
      <div>
        <a href="/adminkullanicilar/ekle"><button>Üye Ekle</button></a>
      </div>
      
@endsection
