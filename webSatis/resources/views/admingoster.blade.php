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
                  <th>Sil</th>
                </tr>
              </thead>
              <?php foreach ($tum_adminler as $row) {?>
              <tbody>
                <tr>
                  <td><a href="/admingoster/duzenle/{{ $row->id }}">Güncelle</a></td>
                  <td style="color: red">{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td style="text-align:center;"><a href="/admingoster/sil/{{ $row->id }}">X</a></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>         
        </div>
      </div>
      <div>
        <a href="/admingoster/ekle"><button>Admin Ekle</button></a>
      </div>
      
@endsection
