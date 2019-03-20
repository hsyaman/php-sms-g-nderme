<h1>Php ile Sms Gönderme </h1>
Bu class ile php ile sms göndermek mail atmak kadar kolay olacaktır.Yukarıda da belirttiğim gibi öncelikle bir servis sağlayıcıdan api almamız ve başlık kaydettirmeniz gerekiyor.
</hr>
<h1>Kurulum</h1>
Dosyamızı oluşturduktan sonra servis sağlayıcının size vermiş olduğu kullanıcı adı, şifre ve başlık parametrelerini private ile tanımlanmış sms.class.php dosyamızdaki değişkenlerimize aktarıyoruz.

<h1>Sms Göndermek</h1>
gönder.php dosyamız ile bu mesajı gönderdik. Eğer işlem başarılı ise servis sağlayıcımızdan geri “200” kodu dönecektir. “200” kodu bu işlem başarı anlamına gelmektedir. 

<h1>kalan Sms Hakkımızı Öğrenmek</h1>
Servis sağlayıcısındaki sms paketinizdeki kalan sms adetini görmek için aşağıdaki kodu yazmanız yeterli.
<code> $sms->getBalance(); </code>

<h1>İletişim</h1>
<a href="https://huseyinyaman.com">https://huseyinyman.com</a>
