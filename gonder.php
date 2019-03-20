<?php

  require_once ('sms.class.php');
  $sms = new smsGonder;
  $numara = '05324441122';
  $mesaj  = 'Bu bir test mesajıdır';
  $cevap = $sms->sendSms($numara, $mesaj);
  if ($cevap == '200') {
     echo "Mesaj Gönderildi";
   }else {
     echo "Mesaj Gönderme Hatası $cevap";
  }

?>
