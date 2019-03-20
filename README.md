<h1>Php ile Sms Gönderme </h1>
Bu class ile php ile sms göndermek mail atmak kadar kolay olacaktır.Yukarıda da belirttiğim gibi öncelikle bir servis sağlayıcıdan api almamız ve başlık kaydettirmeniz gerekiyor.
</hr>
<h2>Kullanımı</h2>
Dosyamızı oluşturduktan sonra servis sağlayıcının size vermiş olduğu kullanıcı adı, şifre ve başlık parametrelerini private ile tanımlanmış değişkenlerimize aktarıyoruz.

gönder.php dosyamız ile bu mesajı gönderdik. Eğer işlem başarılı ise servis sağlayıcımızdan geri “200” kodu dönecektir. “200” kodu bu işlem başarı anlamına gelmektedir. 

Servis sağlayıcısındaki sms paketinizdeki kalan sms adetini görmek için aşağıdaki kodu yazmanız yeterli.
<code> $sms->getBalance(); </code>
