# WebSiteSatis
WebProgramlamaOdevi

                                                                                                          
WEB PROGRAMLAMA SATIŞ SİTESİ 

Kenan YILDIZ   
Ömercan DURMAZ
Bilişim Sistemleri Mühendisliği  
Kocaeli Üniveristesi

Abstract-  Laravel  ve  MYSQL  veritabanı  kullanarak kullanıcı  ve  admin  işlemlerinin  gerçekleştirilebileceği  satış sitesi yapımının gerçekleştirilmesi. 

Keywords—Laravel, MYSQL,veri tabanı, php 

1. GİRİŞ 

Bu  projede  SQL  yapısı  ve  MySQL  veri  tabanı kullanılarak  Laravel  ve  Visual  Studio  Code  yardımıyla oluşturulan uygulama ile öğrencilerin, öğretim görevlilerinin ve  yöneticilerin  kullanımına  uygun  olarak  proje  takibi amacıyla kullanıma sunulmuştur. 

2. PROBLEMİNTANIMI 

Kullanıcılrın web üzerinden eriştikleri satış sitesine üye oldukları,  admin  tarafından  kullanıcıların  eklenip güncellendiği,  ürünlerin  eklendiği,  ürünlerin  düzenlendiği, kullanıcıların sepete ekleyip siparişlerini onayladığı bir satış sitesinin tasarlanması. 

Veri tabanın ilişkisel veri tabanı seçilerek tasarlanması, PHP kullanımı ve Laravel framework’ü seçilerek kodalama işleminin  gerçekleştirilmesi,  şablon  olarak  ise  Bootstrap tabanlı responsive yapıya sahip olan bir şablonun seçilmiş olması ve tasarlanan bu projenin web üzerinden sağlıklı bir şekilde erişime açık olması ve erişim sağlanması. 

3. ARAŞTIRMAAŞAMALARI. 
1. Hazırlık 

Öncelikle  proje  isterleri  detaylı  bir  şekilde  okunup projede  kullanılacak  ve  kullanımı  zorunlu  olan  araçların belirlenmesi  konusu  üzerinde  toplantı  yaptık.  Ardından konuyu detaylı bir şekilde tartışarak kullanılacak olan veri tabanı ve bu veri tabanı seçimi sonrası oluşturulacak veri tabanının içereceği tabloların ne olacağı, bu tabloların neleri içereceği, içeriklerin sahip olacağı özelliklerin neler olacağı konusunda  beyin  fırtınası  gerçekleştirdik.  Ardından kullanılacak olan reponsive yapılı Bootstrap tabanlı şablonu araştırma  aşamasına  geçip  herkesin  bulduğu  şablonlar arasında proje yapısına görsel ve kullanılabilirlik olarak en uygun olan şablonun hangisi olduğuna karar verdik. 

Proje  İsterlerine  baktığımız  zaman  gördüklerimiz karşısında  bir  araştırma  işlemine  başladık,  CodeIgniter MVC  ve  Laravel  hakkında  ön  araştırma  yaptıktan  sonra Laravel ile çalışmaya devam etmeye karar verdik.Ardından Laravel ile geliştirilmiş Proje ve bunların yayına alınması ile ilgili bazı kaynaklara göz atıp videolarını izledik böylelikle başlamadan  önce  hangi  yönde  ve  nasıl  ilerleyeceğimizi öğrenmiş  olduk.Laravel  sürümlerimizi  eşleyerek  proje 

yapımını konusunda oluşacak hataların önüne geçmeye özen gösterdik. 

PHP  için  uygun  frameworklerin  karşılaştırılmasını yaptık. Daha önceden kullandığımız frameworkler hakkında birbirimize  bilgilendirme  yaptık  ve  detaylı  olarak araştırmalarımız sonucu Laravel kullanımına karar verdik. Laravel için geliştirme arayüzü kolaylığından dolayı “Visual Studio Code” kullanacağız ve sanal ortam ve projelerimizin yayınlanmadan  önce  daha  rahat  kontrolünün  sağlamak  ve veri  tabanı  yönetimini  kolay  bir  şekilde  gerçekleştirmek amacıyla “Xampp” programını tercih edeceğiz. 

2. Kullanılacak İşlemler Hakkında Ön Bilgi 

Mysql  üzerinde  çalışmak  için  indirilen  “Xampp” üzerinden bir veritabanı oluşturarak ortamı görmüş olduk ve Laravel ile bağlantı kısmı hakkında bilgiler edindik, Siteyi yayına  almak  için  kullanacağımız  depo  üzerine  kayıt gerçekleştirdik, hesabımızı onayladıktan sonra yapılabilecek işlemlere göz atarak bağlantı hakkında bilgi sahibi olduk. 

MySQL,  ilişkisel  bir  veritabanı  yönetim  sistemidir  ( RDBMS  ).  Peki,  veritabanı  nedir?  Veritabanı,  çeşitli kaynaklardan  bir  veri  koleksiyonunu  depolayan  bir uygulamadır.  'Veritabanı  oluşturma',  'Veritabanı  arama', 'Veritabanını  değiştirme',  'Veritabanını  yönetme'  gibi özelliklere  sahiptir.  MySQL,  SQL  veritabanı  için  bir uygulama  sağlar.  SQL,  bir  veritabanında  tutulan  verileri yönetmek  için  tasarlanmış  bir  sorgulama  dilidir.  MySQL açık kaynaklıdır, geniş bir topluluğa ve tüm dünyada desteğe sahiptir.  MySQL  RDBMS  olduğundan,  tablolar,  sütunlar, satırlar ve dizinlerden oluşan bir veritabanı uygular. 

Veritabanları, bir portala her giriş yaptığınızda (kullanıcı adı  ve  şifre  kombinasyonlarını  saklarken),  bir  arama çubuğuna her yazdığınızda (aradığınız içeriğe erişirken) ve bir web sitesini her kullandığınızda bir sitenin arka ucunda kullanılır.  mağaza  (tüm  ürün  envanterini  depolamak). Kısacası,  veritabanları,  bir  sitenin  bilgilerini  arka  uçta depolamayı  yönetir,  böylece  ön  uçtan  elbette  MySQL kullanılarak  kolayca  erişilebilir.  MySQL,  bir  veritabanı yönetim  sistemi  olarak  tanımlanır  ve  e-ticaret  sitelerinde sıklıkla  kullanılır.  Perakendecilerin  e-ticarete  uyum sağlayamamaları  veya  çevrimiçi  işlemlerinden  veri analitiğini etkin bir şekilde çalıştıramama konusunda daha önce yazmıştım. Ancak MySQL'de kodlama, diğer dillerdeki kodlama  işlevlerinden  çok  farklı  değildir.  Tek  temel  fark, MySQL'in  kullanıcı  tarafından  sağlanan  girdileri  almak yerine yalnızca bir veritabanının içeriğiyle ilgilenmesidir. 

4. KODLAMAAŞAMASI 
1. Kodlama Sırası ve Şablon 

Kodlama  aşamasına  geçmeden  önce  bir  yol haritasıbelirlerdik ve o yol haritasını kendimize ışık haline 

XXX-X-XXXX-XXXX-X/XX/$XX.00 ©20XX IEEE 

getirdik,  basit  bir  şekilde  siteyi  laravel  ile  boostrap 

aracılığıyla  kurduktan  sonra  işlemlere  adım  adım  devam 

ederek  sorunları  göre  göre  ilerleyip  oluşacak  sorunları  C.  Laravel 

büyümeden  önlemeyi,  anında  çözüm  bularak  zamandan  Laravel, özel uygulamalar geliştirmek için kullanılan bir kazanmayı hedefleyeceğiz.  web  framewoküdür.Php  üzerinde  çalışır  ve  tamamen 

ücretsiz  ve  açık  kaynaklıdır.Web  siteleri  ve  çevrimiçi 

Laravel tabanlı bir web uygulaması tasarladığınızda size  uygulamalar  oluşturmak  için,  esnekliğe  ve  zengin aşağıdaki avantajları sunar. Laravel çerçevesi sayesinde web  özelliklere  sahip  birkaç  çerçeveden  biridir.Laravel  ile uygulaması  daha  ölçeklenebilir  hale  gelir.  Laravel,  web  projelerimizin  hazırlanmasını  hızlandırıp,  çok  zaman uygulamaları  geliştirmede  diğer  çerçevelerdeki  bileşenleri  harcadığınız  işlemleri  kolayca  yapabilirsiniz.  Örneğin yeniden kullandığından web uygulaması tasarımında zaman  oturum  yönetimi,  caching  ve  kullanıcı  doğrulama  gibi tasarrufu  sağlanır.  Ad  alanlarını  ve  arabirimleri  içerir,  işlemleri kolayca hazırlayabilirsiniz.Açık kaynak kodlu bir böylece  kaynakları  düzenlemeye  ve  yönetmeye  yardımcı  framework olan MVC yapısıyla zenginleştirilmiştir.Amatör olur.  Uygulamanın  geliştirilmesine  yardımcı  olan  20  ve profesyonel web geliştiricileri tarafından kullanılır. 

yerleşik  kitaplık  ve  modül  sağlayın.  Laravel,  çeşitli  test 

senaryoları  aracılığıyla  test  etmede  özellikler  ve  yardım  Laravel, yaygın olarak kullanılan açık kaynaklı bir PHP içerir. Bu, kodun gereksinimlere göre korunmasına yardımcı  çerçevesidir. Platform, MVC mimari deseni kullanılarak web olur.  Laravel,  kullanıcıya  web  uygulamasında  rotaları  uygulamasının  geliştirilmesi  için  tasarlandı.  Laravel,  MIT tanımlaması  için  esnek  bir  yaklaşım  sağlar.  Uygulamayı  lisansı  altında  yayınlandı.  Bu  nedenle  kaynak  kodu daha  iyi  bir  şekilde  ölçeklendirmeye  yardımcı  olur  ve  GitHub'da  barındırılmaktadır.  Etkileyici  ve  doğru  dil performansı  artırır.  Laravel'de  tasarlanan  bir  web  kurallarına  uyduğu  için  güvenilir  bir  PHP  çerçevesidir. uygulaması  farklı  ortamlarda  çalıştırılabilir.  Laravel,  Laravel, geçişlerin basitleştirilmiş yönetimine yardımcı olan konfigürasyonu verimli bir şekilde ele almak için tutarlı bir  sürüm  kontrol  sistemi  sunar.  Besteci  tabanlı  bağımlılık yaklaşım  sağlar.  Laravel,  çeşitli  basit  zincir  yöntemlerini  yöneticisi ile modüler paketleme. Gelişmiş Eloquent ORM kullanarak  veritabanlarını  sorgulamaya  yardımcı  olan  bir  desteği.  DB  üzerinde  çalışmak  için  ActiveRecord sorgu  oluşturucu  içerir.  Schema  Builder,  PHP  kodundaki  uygulaması.  MySQL,  PostgreSQL  ve  SQLServer  gibi veritabanı  tanımlarını  ve  şemasını  korur  ve  veritabanı  DBMS platformlarını destekleyin. Bıçak şablonlama motoru geçişleriyle  ilgili  değişikliklerin  kaydını  tutar.  Laravel,  gibi özellikler sunar. Örnek kodlar satırı arayüzü ile birlikte dinamik  içerik  içeren  önceden  tanımlanmış  bloklarla  artisan  komutu  desteği.  Harika  belgelere  sahip.  Laravel, hiyerarşik  bloklar  ve  düzenler  tasarlamak  için  kullanılan  gelişmiş bir sorgu oluşturucu mekanizması kullanarak birden hafif bir şablon dili olan Blade şablon motorunu kullanır.  çok DBM nesnesi arasında kısıtlamaları zorlamanıza olanak Laravel, web uygulamasından zengin içerik ve eklerle posta  tanır.  Çerçevenin  otomatik  yükleme  özelliği  vardır,  bu göndermeye yardımcı olan bir posta sınıfı içerir.  Laravel,  nedenle  manuel  bakım  ve  dahil  etme  yolları  yapmazsınız. kaydolma, şifremi unuttum ve şifre hatırlatıcıları gönderme  Çerçeve,  bir  LOC  kapsayıcısının  yardımıyla  yeni  araçlar gibi özellikleri içerdiğinden kimlik doğrulama tasarlamayı  oluşturmanıza yardımcı olur. 

kolaylaştırır. Laravel, mevcut bir oturuma ve genel amaçlı 

önbelleğe  bağlanmak  için  Redis'i  kullanır.  Bu  kuyruklar,  Avantajları: 

önceki  görevin  tamamlanmasını  beklemeden  görevlerin 

daha kolay tamamlanmasına yardımcı olur.  ·  Üçüncü taraf kitaplıklarla Kolay Entegrasyon  

2. Program Nasıl Kodlanır 
   - Modüler paketleme  
- pÖrnocgerlaimkllea rını “Cboimlgpisoasyearr”l arımıvzea   yü“kXlaemyeprpek”   ·  Bağımlılık yöneticisi tamamen besteci tabanlı  “Laravel”  kurulumu  ve  çalışacağı  sanal  ortam için gerekli programları sağlamış olduk.  ·  Blade şablonlama motorunun kullanımı kolay  
- Ardından “Xampp” üzerinden phpMyAdmin ile  ·  Yerleşik kimlik doğrulama mekanizmaları ve önbelleğe veri  tabanımızı  kurduk  ve  “Laravel”  ile  alma mekanizması  

bağlantısı için gerekli bağlantıları olduk. 

- Laravel  ile  VS  Code  üzerinden  koda  yazma işlemleri gerçekleştirildi  
- Blade  php  dosyaları  oluşturularak  view  olan kısım  ve  first  controller  üzerinden  veri  tabanı bağlantıları  ve  gerekli  kontrollerin  yapıldığı kısım gerçekleştirildi. 
- Girilen  bilgilerin  doğruluğu  ve  isterler  göze alınarak  karakter  sayıları  ve  benzeşmelere bakıldı. 
- Son olarak hosting işlemi yapılarak site erişime açılmış oldu.  
- Eşsiz kaliteli oturum kontrolü  
- Daha iyi G/Ç yetenekleri 

Laravel,  HTTP  İsteğinin  başlangıcından  mantığınızın sonuna  kadar  bir  web  uygulamasının  ortak  görevlerinin çoğunu içerir ve kolaylaştırır. Örneğin: Giriş yapmanız mı gerekiyor?  Kimlik  doğrulama  kutudan  çıkar.  Çerezler  ve Oturumlar  kullanmanız  mı  gerekiyor?  Çerez  ve  Oturum yönetimi  de  kullanıma  hazır.  HTML  görünümlerinizi yazmak için basit sözdizimi? Bıçak şablonlama motoru size yardımcı olabilir.  Veritabanıyla konuşmanın basit bir yolu 

mu? Artık ham SQL çağrısı yok! Eloquent, bunu esnek bir şekilde yapmanıza izin verecek ve sizi SQL enjeksiyonundan koruyacaktır.  Tüm  bunlar  ve  bu  araçların  birçoğu, uygulamanız  için  açık  ve  anlaşılır  sözdizimi  kullanılarak kodlanabilir. 

Composer,  PHP  için  bir  paket  yönetim  sistemidir. Composer  paketleri,  topluluğun  ve  şirketlerin  PHP projelerini  etkinleştirmek  veya  genişletmek  için  yazdığı bağımsız araçlar gibidir. Laravel bile bir Besteci paketidir! Örneğin,  Laravel  manifestosuna,  bir  bağımlılık  olarak otomatik olarak indirilen Carbon paketini dahil eder. Carbon, zamanla  ilgili  işlevleri  sıfırdan  kodlamak  yerine  bugünü sabah  10:00'da  almak  için  Today()->addHours(10) kullanmak gibi akıcı bir şekilde zamanı manipüle etmenize olanak tanır. Bazı paketler bir veya daha fazla pakete bağlı olabilir, ancak prensip aynıdır. Halihazırda kodlanmış bazı işlevlere  ihtiyacınız  varsa  ve  sonraki  yılları  sıfırdan başlayarak  harcamak  istemiyorsanız,  başka  Composer paketlerini  kendiniz  de  ekleyebilirsiniz.  Laravel'in  Github deposunda bulunan resmi paketleri de vardır. Laravel resmi belgelerine  veya  The  PHP  Practitioner'a  bakın.  İhtiyacınız olan her şey, en başından ihtiyaç duyabileceğiniz  son kod parçalarına  kadar  orada.  Ayrıca  makinenize  PHP'yi  ve ardından  Composer'ı  kurmalısınız.  Bir  PHP  geliştiricisi olarak, istisnalar kullanabilirsiniz, çünkü bunlar bir şeylerin yanlış  gittiğini  veya  kullanıcının  alışılmadık  bir  şekilde hareket ettiğini (sıfıra bölme gibi) fark etmenize izin verir. İstisnalar  olmaksızın,  uygulamanız  istenmeyen  hatalara neden olur ve hata ayıklaması çok daha zor olur. Yürütmeyi derhal  durdurmanız  ve  başka  bir  işlem  yapmanız  da önemlidir.  İstisnalar  gerçekten  basittir  ve  geliştirme sürecinizi kolaylaştıracaktır. İstisnaları nasıl kullanacağınızı öğrendiğinizde, bu, gelişiminizin olağan bir parçası olacaktır. 

Laravel,  etkileyici,  zarif  sözdizimine  sahip  bir  web uygulaması  çerçevesidir.  Geliştirmenin  gerçekten  tatmin edici  olması  için  keyifli,  yaratıcı  bir  deneyim  olması gerektiğine  inanıyoruz.  Laravel,  kimlik  doğrulama, yönlendirme,  oturumlar,  kuyruğa  alma  ve  önbelleğe  alma gibi  web  projelerinin  çoğunda  kullanılan  ortak  görevleri kolaylaştırarak  geliştirmenin  zahmetini  gidermeye  çalışır. Laravel  erişilebilir,  ancak  güçlüdür  ve  büyük,  sağlam uygulamalar  için  gerekli  araçları  sağlar.  Kontrol konteynerinin  mükemmel  bir  tersine  çevrilmesi,  etkileyici geçiş sistemi ve sıkı bir şekilde entegre edilmiş birim test desteği,  size  görevlendirildiğiniz  herhangi  bir  uygulamayı oluşturmak için ihtiyaç duyduğunuz araçları sağlar.  

4. MySQL 

MySQL,  açık kaynaklı bir ilişkisel veritabanı  yönetim sistemidir  (DBMS).  Oracle  Corporation  tarafından geliştirilmiş,  desteklenmiş  ve  dağıtılmıştır  ve  çevresinde canlı bir topluluğa sahiptir. Temel MySQL özelliklerinden bazıları şunları içerir: Taşınabilirlik, MySQL birçok farklı platformda  çalışır  ve  CMake  kullanılarak  yapılandırılır. Şirket içi bir veritabanına bir SQL arabirimi sağlamak için nispeten kolay bir şekilde yeni motorlar ekleme seçeneği ile çeşitli  depolama  motorlarının  üzerinde  çalışır.  Geçici tablolar olarak kullanılan bellek içi karma tablolar. JSON ve uzamsal  dahil  olmak  üzere  birçok  veri  türü.  SELECT 

listesinde  ve  sorguların  WHERE  yan  tümcesinde  tam operatör ve işlev desteği. SQL GROUP BY ve ORDER BY yan tümceleri ve grup işlevleri için tam destek. Esneklik ve güvenlik. MySQL, birçok dilde yazılmış birkaç istemci ve yardımcı program içerir.  

MySQL, verileri birbiriyle ilişkili veri türlerine sahip bir veya  daha  fazla  tablo  halinde  düzenlemek  için  kullanılan açık  kaynaklı  bir  veritabanı  yönetim  sistemidir.  Bu  veri türleri, verileri ayıklamak, değiştirmek veya yapılandırmak için  kullanılır.  Ayrıca  bilgisayar  sistemlerinde  bir  veri tabanının uygulanmasına, kullanıcıların yönetilmesine, veri tabanı bütünlüğü testine ve yedek oluşturulmasına izin verir. MySQL'i öğrenmek, veritabanı yönetim sistemlerinin nasıl çalıştığını anlamaya yardımcı olur. Aynı zamanda mantıksal düşünme  ve  problem  çözme  yeteneğinizi  de  geliştirir. Ayrıca,  veritabanı  yönetim  sistemleri  her  sektörde kullanılmaktadır,  bu  nedenle  piyasada  MySQL profesyonellerine  büyük  bir  talep  vardır.  MySQL'i  iş bulmak ve bilgi amaçlı da öğrenebilirsiniz.  

MySQL,  modern  büyük  veri  ekosistemindeki  en tanınmış  teknolojilerden  biridir.  Genellikle  en  popüler veritabanı  olarak  adlandırılan  ve  endüstriden  bağımsız olarak  şu  anda  yaygın,  etkili  kullanımdan  yararlanan, kurumsal verilerle veya genel BT ile ilgilenen herkesin en azından  MySQL'in  temel  bir  aşinalığını  hedeflemesi gerektiği  açıktır.  MySQL  ile  ilişkisel  sistemlerde  yeni olanlar  bile  hemen hızlı,  güçlü  ve  güvenli  veri  depolama sistemleri oluşturabilir. MySQL'in programatik sözdizimi ve arayüzleri, diğer popüler sorgu dillerinin ve yapılandırılmış veri  depolarının  geniş  dünyasına  açılan  mükemmel  ağ geçitleridir.  MySQL,  Oracle  tarafından  geliştirilmiş, yapılandırılmış  sorgu  diline  (SQL)  dayalı  bir  ilişkisel veritabanı  yönetim  sistemidir  (RDBMS).  Veritabanı, yapılandırılmış  bir  veri  topluluğudur.  Basit  bir  alışveriş listesinden bir resim galerisine veya bir şirket ağında çok miktarda  bilgiyi  tutacak  bir  yere  kadar  her  şey  olabilir. Özellikle ilişkisel bir veritabanı, verileri toplayan ve ilişkisel modele  göre  organize  eden  bir  dijital  mağazadır.  Bu modelde  tablolar  satırlar  ve  sütunlardan  oluşur  ve  veri öğeleri arasındaki ilişkilerin tümü katı bir mantıksal yapıyı takip  eder.  Bir  RDBMS,  basitçe,  böyle  bir  veritabanını gerçekten  uygulamak,  yönetmek  ve  sorgulamak  için kullanılan  yazılım  araçları  setidir.  MySQL,  müşteriye yönelik  web  uygulamalarından  güçlü,  veriye  dayalı  B2B hizmetlerine kadar her şeyi oluşturmak ve sürdürmek için en popüler  yazılım  yığınlarının  çoğunun  ayrılmaz  bir parçasıdır. Açık kaynak yapısı, kararlılığı ve zengin özellik seti,  Oracle'ın  devam  eden  geliştirme  ve  desteğiyle birleştiğinde,  Facebook,  Flickr,  Twitter,  Wikipedia  ve YouTube gibi internet açısından kritik kuruluşların hepsinin 

MySQL arka uçlarını kullanması anlamına geliyor. 

MySQL,  birçok  endüstride  en  yaygın  kullanıma  sahip olduğundan,  yeni  web  yöneticilerinden  deneyimli yöneticilere  kadar  iş  kullanıcıları,  temel  özelliklerini anlamaya  çalışmalıdır.  Bu  teknolojiyi  kullanıp kullanmamaya karar vermek ve bu konuda etkili bir şekilde iletişim kurmak, MySQL'in temel kullanılabilirliği, yapısı, felsefesi  ve  kullanılabilirliğinin  gözden  geçirilmesiyle başlar. Sıklıkla internet uygulamaları veya web servisleriyle 

ilişkilendirilmesine  rağmen  MySQL,  diğer  teknolojiler  ve mimarilerle  kapsamlı  bir  şekilde  uyumlu  olacak  şekilde tasarlanmıştır.  RDBMS,  sayısız  Linux dağıtımı  veya  Mac OS ve Windows gibi Unix tabanlı işletim sistemleri de dahil olmak üzere tüm büyük bilgi işlem platformlarında çalışır. MySQL'in  istemci-sunucu  mimarisi,  farklı  programlama arayüzlerinin yanı sıra çeşitli arka uçları destekleyebileceği anlamına  gelir.  Veriler,  mimari  ve  dil  benzerlikleri sayesinde  MySQL'den  çatallarına  (örneğin  MariaDB)  ve diğer çoğu RDBMS'ye doğrudan taşınabilir. Yerleşik Oracle ve üçüncü taraf geçiş araçları ayrıca MySQL'in, ister şirket içi ister bulut tabanlı olarak tasarlanmış olsunlar, çok çeşitli genel  depolama  sistemlerine  ve  bu  sistemlerden  veri taşımasına olanak tanır. MySQL, sanallaştırılmış ortamlarda konuşlandırılabilir, dağıtılabilir veya merkezileştirilebilir ve hatta  öğrenme  amaçlı,  test  veya  küçük  uygulamalar  için taşınabilir bağımsız kitaplıklar olarak mevcuttur. MySQL'in tüm  bu  diğer  sistemler ve yazılımlarla geniş uyumluluğu, onu  çoğu  durumda  özellikle  pratik  bir  RDBMS  seçimi haline getirir. 

İlişkisel  veritabanlarını  diğer  dijital  depolamalardan ayıran  birincil  faktör,  verilerin  yüksek  düzeyde  nasıl organize  edildiğidir.  MySQL  gibi  veritabanları,  her  şeyi kapsayan  tek  bir havuz veya  yarı  veya  yapılandırılmamış belge koleksiyonlarının aksine, birden çok, ayrı ve yüksek düzeyde  kodlanmış  tablolarda  kayıtlar  içerir.  Bu, RDBMS'lerin veri alma, bilgileri güncelleme gibi eylemleri veya  toplamalar  gibi  daha  karmaşık  eylemleri  daha  iyi optimize  etmesine  olanak  tanır.  Veritabanının  tüm  içeriği üzerinde, örneğin tek tek sütunlarda izin verilen değerleri, tabloların ve görünümlerin özelliklerini veya iki tablodaki dizinlerin  nasıl  ilişkili  olduğunu  açıklayan  bir  mantıksal model tanımlanır. İlişkisel modeller birkaç nedenden dolayı popülerliğini korumuştur. Kullanıcıları sezgisel, bildirimsel programlama  dilleriyle  güçlendirirler -  bu  sonuca  götüren prosedürün  her  adımını  titizlikle  kodlamak  yerine,  temel olarak  veritabanına,  yazılı  İngilizceye  benzer  veya  en azından  anlaşılabilir  bir  dilde  hangi  sonucun  istendiğini söylerler.  Bu,  işin  çoğunu  RDBMS  ve  SQL  motorlarına taşır,  mantıksal  kuralları  daha  iyi  uygular  ve  değerli kaynaklar ile insan gücünden tasarruf sağlar. gerektirir.  

MySQL'in  ilişkisel  doğası  ve  ardından  gelen  katı depolama yapıları kısıtlayıcı görünse de, tablo paradigması belki  de  en  sezgisel  olanıdır  ve  nihayetinde  daha  fazla kullanılabilirlik  sağlar.  Aslında  MySQL,  standart  ancak zengin  mantıksal,  sayısal,  alfanümerik,  tarih  ve  saat türlerinden daha gelişmiş JSON veya coğrafi verilere kadar mümkün  olan  en  geniş  veri  yapılarını  desteklemek  için birçok taviz verir. Yalnızca veri türlerinin ve kapsamlı bir yerleşik özellik setinin ötesinde, MySQL ekosistemi ayrıca sunucu yönetiminden raporlama ve veri analizine kadar her şeyi  kolaylaştıran  çeşitli  araçlar  içerir.  RDBMS'nin kapsayıcı  mimarisinden  bağımsız  olarak,  kullanıcılar  her zaman  verileri  istedikleri  gibi  modellemelerine  ve kodlamalarına  izin  veren  bir  MySQL  özelliği  bulabilir. MySQL,  öğrenilmesi  ve  kullanılması  en  basit  veritabanı teknolojilerinden biri olmaya devam ediyor. 

5. Heroku 

Heroku,  cloud  bir  platform  servisidir.  Yani;  nodeJS, Java,  php  vs.  bir  çok  platform  da  hazırladığınız uygulamalarınızı  cloud  teknolojisi  sayesinde  insanlarla paylaşmasını  sağlar.  En  güzel  yanı da  bir  miktar  ücretsiz kullanım  imkanı  sunduğu  için,  kolayca  deneyebilir  ya  da düzenli  olarak  kullanabilirsiniz.  Ufak  bir  üzücü  haber: ücretsiz  kullanmak  istiyorsanız  aynı  anda  maksimum  5 uygulama  barındırabiliyorsunuz.Uygulamalarınızı  git, bitbucket,  dropbox  gibi  servislerde  tutup,  onlar  üzerinden heroku  ya  entegre  ederek  kullanım  sağlayabilirsiniz.Hadi birlikte  basit  bir  nodeJS  uygulamasını  heroku  üzerinden erişime  açalım.  “https://dashboard.heroku.com/apps” buradan  uygulamalarımızı  görüntüleyebilir  ve  yeni  bir uygulama oluşturabilirsiniz. 

Heroku, yazılım geliştirmeyi sağlayan araçlar sunan bir Hizmet Olarak Platformdur (PaaS). Heroku, bir PaaS olarak, kurumsal  kalitede  bir  uygulamayı  barındırmak  için normalde  gerekli  olan  altyapı  sorunlarını  atlarken, işletmelerin kurumsal düzeyde uygulamaları hızlı bir şekilde dağıtmasına,  oluşturmasına,  yönetmesine  ve ölçeklendirmesine  olanak  tanır.  Barındırma/altyapı  ile Salesforce arasında aracı görevi görür. 

Tüm  Heroku  tabanlı  uygulamalar,  Hizmet  Olarak Altyapı  (IaaS)  sağlayıcısı  ve  piramidimizin  temeli  olan Amazon Web Hizmeti (AWS) tarafından barındırılır. AWS, bilgi işlem kaynaklarını yönetir ve yeni uygulama geliştirme sırasında  kurulum  süresini  önemli  ölçüde  azaltır.  Yük dengeleme,  işletim  sistemi  seçimi,  sunucular,  ağlar, depolama, sunucunun günlüğe kaydedilmesi ve izlenmesi, uygulamanın  sağlığının  izlenmesi,  konteyner organizasyonunun  kurulması-tümü  AWS  tarafından gerçekleştirilir. 

Heroku'nun  ne  olduğunu  anlamak  için  ne  olmadığıyla başlayacağız.  Heroku'nun  Amazon  Web  Services  (AWS) üzerinde  çalıştığını  fark  etmiş  olabilirsiniz  ve  şimdi kendinize  neden  AWS'ye  dağıtım  yapmadığınızı  ve Heroku'yu  tamamen  atlamadığınızı  soruyorsunuz.  Her şeyden  önce,  Heroku  ve  AWS  aynı  şeyler  değildir.AWS, Hizmet  Olarak  Altyapı  (IaaS)  sağlayıcısıdır,  yani  büyük, paylaşılan  veri  merkezlerini  yönetmekten  sorumludur.  Bu veri  merkezleri  bizim  “bulut”  dediğimiz  şeydir.  AWS, Azure  ve  Google  gibi  şirketlerin  tümü,  geliştiricilerin sunucuları  kendileri  oluşturmak  yerine  uygulamalarını  bu veri  merkezlerinde  barındırmak  için  ödeme  yapabilmeleri için  IaaS'yi  oluşturdu.Bu  harika  bir  takas  ama  işlerinin doğası  gereği,  IaaS  sağlayıcıları,  geliştiricinin  onlarla çalışma  deneyiminden  çok  veri  merkezlerini  çalıştırmakla ilgileniyor.  Bu,  uygulamalarınızı  özellikle  geniş  ölçekte çalışır durumda tutmak için yüksek düzeyde AWS bilgisinin gerekli olduğu anlamına gelir. 

Yine,  Heroku  geliştiriciler  tarafından  geliştiriciler  için geliştirildi.  Deneyimde  gezinmek  kolaydır,  geliştiriciler oturum  açtıklarında  tam  olarak  ne  yapmaları  gerektiğini bilirler  ve  uygulamalarının  platformda  her  saniye  nasıl çalıştığını tam olarak bilirler.Açık ve genişletilebilir.Heroku açık  ve  genişletilebilir,  böylece  geliştiriciler  seçtikleri herhangi  bir  dilde  geliştirebilirler.  Nodejs,  Ruby,  PHP, 

Python,  Java,  fark  etmez.Geliştiriciler  yalnızca  seçtiğiniz dilde derleme yapmakla kalmaz, aynı zamanda çok büyük bir Heroku Eklentisi ağı vardır. Heroku Eklentileri, tek bir tıklamayla  uygulamanıza  dağıtılabilen  güçlü  özellikler  ve işlevlerdir.  Bu  uygulamalardan  bazıları  ücretli  ve  bazıları ücretsizdir,  ancak  bir  sonraki  projenizden  yüzlerce  saat tasarruf  edebilirler.Salesforce'a  bağlanmak kolaydırKurumsal müşterilerimizle konuşurken Heroku'nun gerçek gücü onu Salesforce'a bağlamaktır. Heroku Connect'i kullanarak, uygulamanız ve Salesforce arasında çift yönlü bir senkronizasyon oluşturabiliyoruz. 

6. Bootstrap 

Bootstrap, CSS ve JavaScript dosyalarından oluşur. Web sitesi geliştirmeyi daha hızlı ve daha kolay hale getiren bir çerçevedir  (aka  -  "kütüphane"  veya  "araç  takımı"). Bootstrap,  şu  özelliklere  sahip  Web  Siteleri  oluşturmaya yardımcı olur. 

Tutarlı: 

Her şeyden önce, Bootstrap tutarlı, tek tip bir görünüm ve  tasarım  sağlar.  Çok  az  bir  çabayla  Bootstrap, karmakarışık bir siteyi profesyonel, görsel olarak çekici bir tasarıma dönüştürmek için kullanılabilir.  

Duyarlı: 

Bootstrap  ile  oluşturulan  siteler,  masaüstü bilgisayarlar,  dizüstü  bilgisayarlar,  tabletler  ve  akıllı telefonlar  dahil  olmak  üzere  herhangi  bir  cihazda  iyi görünecek  ve  çalışacak  şekilde  tasarlanmıştır.  Bootstrap “önce  mobil”dir;  bu,  daha  küçük  mobil  cihazların tasarımının  daha  büyük  ekranlı  cihazlardan  önce düşünüldüğü anlamına gelir. 

Duyarlılık: 

Yüksekliğe değil ekran genişliğine bağlıdır. Bunun nedeni Bootstrap'in genişlik tabanlı CSS Medya Sorguları kullanmasıdır. Uyumlu Bootstrap, tamamen standartlara ve tarayıcılar arası uyumluluğa dayanan olgun, test edilmiş bir kod  tabanıdır.  Bootstrap'in  sunduklarını  doğru  şekilde kullanan siteler de bu uyumluluktan faydalanacaktır. 

5. TASARIMAŞAMASI 

Ekran  resimleri  ile  detaylı  anlatım  Ekler  kısmında yapılmıştır. 

6. AKIŞŞEMASI 

Sitenin  genel  çalışma  prensibini  anlatmaya  yardımcı olmak için aşağıdaki şema tasarlandı. 


A.  Psuedo Kod Üyeler için: 

1. BAŞLA 
1. Email ve şifresiyle giriş yap
1. Üye değilseniz kayıt olmak için tıklayın
1. Açılan kayıt ekranında gerekli bilgileri eksiksiz doldurun
1. Sisteme giriş yapma hakkı kazandınız
1. Ürünleri Sepete Ekle ve Çıkar
1. Ürünleri Tıklayınca detay görüntüle
1. Sepete eklenen ürünler tamam ise onayla 
1. Onaylama ekranında adres ve ödeme seçeneğini seç 
1. Seçim sonrası sipariş ve sipariş durumu siparişler ekranında görüntülenmektedir. 
1. BİTTİ

Admin için: 

1. BAŞLA 
1. Email ve şifresiyle giriş yap
1. Sistemde açılan ekranda menüden seçim yap
1. Seçilen seçenek ne ise o seçeneğe ait bilgileri ekle güncelle ve sil
5. BİTTİ
7. YAZILIMKATMANI 
1. İş Katmanı 

Bu  bölümde  Laravel  ve  Visual  Studio  Code  eşliğinde PHP  diliyle  veri  tabanına  bilgi  ekleme,  karşılaştırma güncelleme ve kaldırma gibi işlemleri yaptık. 

2. Sunum Katmanı 

Bu kısımda ise uygulamamızın kullanıcı ile etkileşime gireceği bölümü ayarladık. 

VIII. LİTERATÜRTARAMASI 

Laravel üzerinde yapılan veritabanı işlemlerine göz atarak proje sonunda oluşan tablolara göz attık, Veritabanı bağlantısı için yapılan işlemler ve bu işlemlerin kullanım amaçlarını, Sql kodlarının nasıl kullanıldığını yapılan projeler aracılığı ile öğrenerek projemize olumlu yönler katmaya çalıştık 

Laravel,  siteler  ve  web  uygulamaları  oluşturmak için  kullanılan  açık  kaynaklı  bir  PHP  web  çerçevesidir. Düzgün bir öğrenme eğrisine sahiptir, PHP ile oluşturmanın bazı tuhaflıklarını ortadan kaldırır ve birçok modern yerleşik kitaplığa  sahiptir.  Bazıları  bunun  Ruby  on  Rails  PHP eşdeğeri  olduğunu  söylüyor.  Laravel  ile  bağımlılıkları  ve paketleri  yönetmek  için  ComposerComposer'dan yararlanabilirsiniz.  Birçok  kullanışlı  paket,  Laravel geliştirmenizi hızlı bir şekilde izlemenize olanak tanır. Hata ayıklama,  kimlik  doğrulama,  API  etkileşimleri  vb.  gibi şeyler düşünün. Packagist & Packalyst gibi siteler, faydalı Laravel  paketleri  bulmak  için  harika  kaynaklardır.  Eylül 2020'den beri Laravel 8 herkese açıktır. Laravel Jetstream, model  fabrika  sınıfları,  geçiş  ezme,  iş  gruplandırma, geliştirilmiş  hız  sınırlama,  dinamik  Blade  bileşenleri, Tailwind  sayfalandırma  görünümleri,  zaman  testi yardımcıları  ve  daha  fazlası  gibi  özellikler  sunar.  Elbette Laravel  için  mevcut  e-ticaret  paketleri  var.  Laravel uygulamanızda  e-ticaret  işlevlerini  hızlı  bir  şekilde kurmanıza  yardımcı  olabilirler.  İşte  en  popüler  olanların küratörlüğünde bir listesi:  

Bagisto — E-ticaret için kod odaklı ve çok özellikli Laravel paketi. Ücretsiz ve açık kaynak.  

Aimeos — Bir Laravel e-ticaret paketi ve çevrimiçi mağaza çözümü. Ücretsiz ve açık kaynak.  

AvoRed — Modüler ve özelleştirilebilir bir PHP alışveriş sepeti. Ücretsiz ve açık kaynak.  

Vanilo  -  Bu  aslında  Laravel  için  bir  e-ticaret çerçevesi (Magento veya Prestashop gibi). 

GetCandy  —  Başsız  bir  Laravel  e-ticaret  API'sı. Ücretsiz ve  açık kaynak. Peki, bu bizi nereye götürüyor? Laravel  ile  üç  e-ticaret  seçeneği  hemen  hemen  şunlardır: Laravel  destekli  bir  CMS  seçin  ve  buna  özel  e-ticaret ekleyin.  Uygulamanızı  genişletmek  için  oluşturulmuş  e- ticaret  paketlerini  kullanın.  Sıfırdan  kendi  e-ticaret uygulamanızı oluşturun. Hızlı kolay. Bu yazının ilk sürümü için  PyroCMS  kullanarak  ve  ardından  Snipcart'ı  özel alışveriş  sepeti  olarak  entegre  ederek  bunu  yaptık.  Bu yazının  en  üstündeki  bağlantı.  Bunun  yerine,  saf  Laravel kullanarak nasıl sıfırdan bir mağaza oluşturabileceğinizi ve ardından  e-ticaret  ve  alışveriş  sepeti  özelleştirmesini etkinleştirmek  için  Snipcart'ı  nasıl  ekleyebileceğinizi göstereceğim.  Tüm  bu  seçenekler,  eksiksiz  bir  e-ticaret CMS'sini  kullanarak  kazanacağınız  ortak  avantajlara sahiptir:  yüksek  ölçeklenebilirlik,  kolay  özelleştirme, bağımsız  e-ticaret  işlevleri  vb.  Bu  demo  için  bir  Laravel projesinde çalışmaktan heyecan duyuyorum. Jamstack/statik site tuts'larımızın çoğunun aksine, mağazamız için herhangi bir arka uç mantığını idare etmek çok kolay olacaktır. 

- Veritabanı  sorguları  ve  bu  sorguların sonuçlarını  gösterme  konusunda  sıkıntılar yaşadık, yabancı kaynaklardan ve videolardan gördüğümüz  işlemlerle  bu  soruna  çözüm aradık ve başardık. 
- Site  yayınlama  konusunda  kullanacağımız depo olan “Heroku” sitesine kayıt aşamasında ufak  bir  sıkıntı  ile  karşılaştık,  hesap  onayını kabul  etmediği  için  bazı  özelliklerini kullanmamıza izin vermiyordu fakat ardından giriş yapıp kullanabildik. 
- Yayınlarken  kullanacağımız  sitenin özelliklerinden  olan  github  bağlantısı  ile yayınlama işleminde hata ile karşılaştık ve bu hatanın çözümüne ulaşamadık. 
- Site yayınlamasında “403 Forbidden” hatası ile karşılaştık, araştırmalar sonucu bir izin hatası olduğunu ve bu hatayı “.htaccess ve Procfile” dosyaları ekleyip içine eklediğimiz kodlar ile çözdük. 
- Veritabanı  bağlantısı  için  kullanacağımız ClearDB  özelliğinin  bağlantı  kodlarına ulaşmadan  denediğimiz  için  sitemiz  sürekli olarak  yüklenme  kısmında  veritabanı veriyordu  fakat  daha  sonra  yabancı kaynaklardan  bağlantı  kodlarına  ulaşarak  bu sorunun da önüne geçtik. 


KAYNAKÇA 

1. https://laravel.com/docs/9.x/installation 
1. https://getcomposer.org/download/ 
1. https://laravel.com/docs/9.x/migrations 
1. https://laravel.com/docs/9.x/eloquent 
1. https://laravel.com/docs/9.x/hashing 
1. https://appdividend.com/2022/03/01/how-to-deploy-laravel-project- on-heroku/ 
1. https://www.youtube.com/watch?v=ImGD8IU1Hgk 
1. https://www.geeksforgeeks.org/laravel-mysql-database-connection/ 
1. https://www.geeksforgeeks.org/basics-of-phpmyadmin/ 
1. https://www.w3schools.com/php/php\_mysql\_connect.asp 
1. https://laravel.com/docs/4.2/database#:~:text=Laravel%20makes%20 connecting%20with%20databases,should%20be%20used%20by%20d efault. 
1. https://www.youtube.com/playlist?list=PL8p2I9GklV47EWeJZlC- \_dgj7kdBWYd56 
1. https://www.youtube.com/watch?v=1dCTDMPTGEQ 
1. https://betterprogramming.pub/hosting-your-laravel-app-on-heroku- 198764167a85 
1. https://juangsalazprabowo.medium.com/how-to-deploy-a-laravel-app- into-heroku-df55efbf8e4e 
1. Laravel - GeeksforGeeks 
1. Laravel - Vikipedi (wikipedia.org) 
1. https://laravel.com/docs/9.x/releases

