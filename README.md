# WebSiteSatis
WebProgramlamaOdevi

                                                                                                          
Kenan YILDIZ
Kocaceli Üniversitesi
Bilişim Sistemleri Mühendisliği

        
Ömercan DURMAZ
Kocaceli Üniversitesi
Bilişim Sistemleri Mühendisliği


Özet

Laravel ve veritaabanı kullanarak kullanıcı ve admin işlemlerinin gerçekleştirilebileceği satış sitesi yapımının gerçekleştirilmesi.

İ.	GIRIŞ

2021/2022 Bahar dönemi dersi olan Web Programlama dersinin vize yerine geçecek olan projesini, şu ana kadar öğrendiklerimizin üstüne yapacağımız araştırmaları ekleyerek kodlamalıyım.

İİ.	ARAŞTIRMA AŞAMASI

A.	Hazırlık

Proje İsterlerine baktığımız zaman gördüklerimiz karşısında bir araştırma işlemine başladık, CodeIgniter MVC ve Laravel hakkında ön araştırma yaptıktan sonra Laravel ile çalışmaya devam etmeye karar verdik.
Ardından Laravel ile geliştirilmiş Proje ve bunların yayına alınması ile ilgili bazı kaynaklara göz atıp videolarını izledik böylelikle başlamadan önce hangi yönde ve nasıl ilerleyeceğimizi öğrenmiş olduk.
Laravel sürümlerimizi eşleyerek proje yapımını konusunda oluşacak hataların önüne geçmeye özen gösterdik.

B.	Kullanılacak İşlemler Hakkında Ön Bilgi

Mysql üzerinde çalışmak için indirilen “Xampp” üzerinden bir veritabanı oluşturarak ortamı görmüş olduk ve Laravel ile bağlantı kısmı hakkında bilgiler edindik, Siteyi yayına almak için kullanacağımız depo üzerine kayıt gerçekleştirdik, hesabımızı onayladıktan sonra yapılabilecek işlemlere göz atarak bağlantı hakkında bilgi sahibi olduk.

İİİ.	KODLAMA AŞAMASI

A.	Kodlama Sırası ve şablon

Kodlama  aşamasına  geçmeden  önce  bir  yol  haritası
belirlerdik ve o yol haritasını kendimize ışık haline getirdik, basit bir şekilde siteyi laravel ile boostrap aracılığıyla kurduktan sonra işlemlere adım adım devam ederek sorunları göre göre ilerleyip oluşacak sorunları büyümeden önlemeyi, anında çözüm bularak zamandan kazanmayı hedefleyeceğiz. 




B.	Program Nasıl Kodlanıyor

•	Laravel üzerinde yeni bir proje açılıyor, 

•	Python üzerinden csv dosyasını okumayı öğrendim, ardından bu bilgi ile bir kod yazarak tüm csv kodlarımın satırlarını tek tek yazdırarak test etmiş oldum.

•	Daha sonra ‘pytube’ kütüphanesi üzerinde araştırma yaptım ve youtube linklerini indiren bir python kodu yazdım.

•	Bu öğrendiğim iki bilgiyi tek bir çatı altında birleştirdim ve okunan csv dosyasındaki linkleri otomatik olarak indirip dosyaya kaydeden python kodunu hazırladım.

•	Python üzerinden ekran fotoğrafı alma programını kodladım, ardından videolarımı bu ekranda oynatarak ekran fotoğraflarını çekmeye çalıştım, ekran fotoğrafı alınacak yeri sadece video bölgesi olarak başarılı bir şekilde ayarlardım fakat ‘screenshot’ alma süresi çok hızlı olduğu için bu kodlarımı kullanamadım.

•	Bir program yardımıyla belli saniye arasında otomatik olarak ekran fotoğrafı alarak videolarımı resim haline dönüştürdüm.

•	Bu işlem sonucunda ortaya 25.000+ bir veri elde ettim.

•	Elde ettiğim bu veri üzerinde temizlemeler yaptım; çok küçük olan görüntüleri, ders anlatım sırasında karalanmış veya öğretmenin eli gözüken fotoğraflarımı tek tek temizledi..

•	Bu işlem sonrasında veri sayım 1.390+ gibi bir sayıya geriledi ve temiz veri kümemi elde etmiş oldum.

•	Ardından bir dosya içerisinde gezinme kodu yazdım, bu kodu yazarken ‘os’ metodundan yararlandım, dosya içerisindeki verilerimi bir listeye atadım, ardından for döngüsü ile bu liste içerisinde dolaşarak işlemlerime başladım

•	Bu işlem içerisinde her fotoğrafımın arka planını tek tek ‘Gri’ rengine dönüştürdüm, bu işlemin sebebi ortak bir taban elde ederek görüntünün başarı oranını arttırmak oldu.

•	Ardından bu fotoğraflarımı otomatik olarak kaydederken isimlerde çakışma olmasın diye ‘time’ metodundan yararlandım ve yeni oluşturulan her fotoğrafıma anlık zaman bilgisi adını verdim böylece üst üste yazma sonucu oluşacak veri kaybını engellemiş oldum.

•	

 

XXX-X-XXXX-XXXX-X/XX/$XX.00 ©20XX IEEE 


C.	Laravel

Laravel, özel uygulamalar geliştirmek için kullanılan bir web framewoküdür.Php üzerinde çalışır ve tamamen ücretsiz ve açık kaynaklıdır.
Web siteleri ve çevrimiçi uygulamalar oluşturmak için, esnekliğe ve zengin özelliklere sahip birkaç çerçeveden biridir.
Laravel ile projelerimizin hazırlanmasını hızlandırıp, çok zaman harcadığınız işlemleri kolayca yapabilirsiniz. Örneğin oturum yönetimi, caching ve kullanıcı doğrulama gibi işlemleri kolayca hazırlayabilirsiniz.
Açık kaynak kodlu bir framework olan MVC yapısıyla zenginleştirilmiştir. 
Amatör ve profesyonel web geliştiricileri tarafından kullanılır.

D.	Heroku

Heroku, bir bulut bilişim uygulama altyapısı servis sağlayıcısıdır. Platform as a Service (PaaS) olarak ifade edebileceğimiz Heroku, JavaScript, Ruby, Java, PHP, Python, Golang, Scala ve Clojure ile geliştirdiğimiz web tabanlı uygulamalarımızı internete taşımamızı (deploy, manage ve scale) sağlar. Bu işlemler için Dyno adı verilen Linux temelli küçük ve hafif sanal ortamlar kullanılmaktadır.


E.	Sql 

SQL (Structured Query Language), yapılandırılmış sorgu dili anlamına gelir. Sorgu dili, veri tabanlarından belirli bilgilerin alınmasını kolaylaştırmak için tasarlanmış bir tür programlama dilidir. Bu nedenle SQL; “veri tabanlarının dili” olarak adlandırılır.
Satır ve sütunlardan oluşan bir tablo olarak tanımlayabileceğimiz veri tabanı; gerçek hayattaki değerleri tablolarda saklayarak modeller.
SQL veritabanı, yapılandırılmış bir veri kümesini depolayan bir tablo koleksiyonudur.
SQL, kullanıcı ile veri tabanı arasında iletişim kurulmasını sağlar. Uygulamanızı geliştirmek için Java veya Kotlin gibi bir programlama dili kullanıyor olsanız da verileri veri tabanında depolamak için, bu iletişime yardımcı olacak bir tür ara yüz veya dile ihtiyacınız vardır.

F.	Mysql

MySQL bir ilişkisel veri tabanı olarak, 1995 yılında kullanıma sürülen en popüler açık kaynaklı ilişkisel veri tabanı yönetim sisteminden biridir.
MySQL serbestçe kullanılabilen bir veri tabanı sistemidir. Ancak, gelişmiş işlevleri kullanabileceğiniz birkaç ücretli sürüm de bulunmaktadır. 
Güçlü bir veri tabanı yönetim sistemi olan MySQL veri tabanı gerektiren hemen hemen her ortamda rahatlıkla kullanılabilir. Ama özellikle web sunucularında en çok kullanılan veritabanıdır, asp, php gibi birçok web programlama dili ile kullanılabilir.



IV. Psuedo Kod 

•	Başla
•	Kullanıcı adını gir
•	Şifreni gir
•	Şifre ve ad doğru ise giriş yap
•	Açılan sayfadan bilgilerini görüntüle/güncelle
•	Ürünleri incele
•	İstenilen ürünleri sepete ekle
•	Ödeme yöntemi belirle
•	Kart Bilgilerini gir
•	Teslimat adresi gir
•	Sepeti onayla
•	Verilen siparişleri kontrol et
•	Bitir

V. Akış Diyagramı

 


VI. Literatür Taraması

Laravel üzerinde yapılan veritabanı işlemlerine göz atarak proje sonunda oluşan tablolara göz attık, Veritabanı bağlantısı için yapılan işlemler ve bu işlemlerin kullanım amaçlarını, sql kodlarının nasıl kullanıldığını yapılan projeler aracılığı ile öğrenerek projemize olumlu yönler katmaya çalıştık.



VII.  ZORLANILAN KISIMLAR


•	Veritabanı sorguları ve bu sorguların sonuçlarını gösterme konusunda sıkıntılar yaşadık, yabancı kaynaklardan ve videolardan gördüğümüz işlemlerle bu soruna çözüm aradık ve başardık.

•	Site yayınlama konusunda kullanacağımız depo olan “Heroku” sitesine kayıt aşamasında ufak bir sıkıntı ile karşılaştık, hesap onayını kabul etmediği için bazı özelliklerini kullanmamıza izin vermiyordu fakat ardından giriş yapıp kullanabildik.
•	Yayınlarken kullanacağımız sitenin özelliklerinden olan github bağlantısı ile yayınlama işleminde hata ile karşılaştık ve bu hatanın çözümüne ulaşamadık.
•	Site yayınlamasında “403 Forbidden” hatası ile karşılaştık, araştırmalar sonucu bir izin hatası olduğunu ve bu hatayı “.htaccess ve Procfile” dosyaları ekleyip içine eklediğimiz kodlar ile çözdük.
•	Veritabanı bağlantısı için kullanacağımız ClearDB özelliğinin bağlantı kodlarına ulaşmadan denediğimiz için sitemiz sürekli olarak yüklenme kısmında veritabanı veriyordu fakat daha sonra yabancı kaynaklardan bağlantı kodlarına ulaşarak bu sorunun da önüne geçtik.
 
