<h1>Php ile Sms Gönderme </h1>
Bu class ile php ile sms göndermek mail atmak kadar kolay olacaktır.Yukarıda da belirttiğim gibi öncelikle bir servis sağlayıcıdan api almamız ve başlık kaydettirmeniz gerekiyor.
</hr>
<h1>Kurulum</h1>
Dosyamızı oluşturduktan sonra servis sağlayıcının size vermiş olduğu kullanıcı adı, şifre ve başlık parametrelerini private ile tanımlanmış sms.class.php dosyamızdaki değişkenlerimize aktarıyoruz.

<h1>Sms Göndermek</h1>
gönder.php dosyamızda yer alan numara mesaj kısmına istediğimiz numara ve mesajı yazıp kodumuzu çalıştırıyoruz.Eğer işlem başarılı olursa cevap olarak 200 kodunu dönecektir ve işlem başarılı şekilde ekrana yazı yazdıracaktır. 

<h1>Kalan Sms Adeti</h1>
Servis sağlayıcısındaki sms paketinizdeki kalan sms adetini görmek için aşağıdaki kodu yazmanız yeterli.
<code> $sms->getBalance(); </code>

<h1>İletişim</h1>
<a href="https://huseyinyaman.com">https://huseyinyman.com</a>
