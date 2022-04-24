@extends('adminmaster')
@section("admincontent")
<div>
      <div class="info">
          <div>
              Kısa Yollar:
          </div>
        <div>
            <a href="/adminkullanicilar/ekle"><button>Üye Ekle</button></a>
        </div>
        <div>
          <a href="/adminurunler/ekle"><button>Ürün Ekle</button></a>
        </div>
        <div>
            <a href="/admingoster/ekle"><button>Admin Ekle</button></a>
        </div>
        
        <div>
            İşlemler:
        </div>
        <div>
            <a href="/adminkullanicilar"><button>Üyeler İşlemleri</button></a>
        </div>
        <div>
            <a href="/adminurunler"><button>Ürünler İşlemleri</button></a>
        </div>
        <div>
            <a href="/admingoster"><button>Admin İşlemleri</button></a>
        </div>
    </div>
@endsection
