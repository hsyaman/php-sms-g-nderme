<?php 
  /**
  * hüseyin yaman 
  * www.huseyinyaman.com
  * php sms class 
  */
class smsGonder 
{
    private $username = 'API KULLANICI ADI';
    private $password = 'API ŞİFRE';
    private $title    = 'SMS BAŞLIĞINIZ';
    private $reqSendLink      = 'http://api.iletimerkezi.com/v1/send-sms';
    private $reqBalanceLink   = 'https://api.iletimerkezi.com/v1/get-balance';
    private $reqReportLink    = 'https://api.iletimerkezi.com/v1/get-report';
  function sendRequest($reqLink,$send_xml,$header_type)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$reqLink);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$send_xml);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$header_type);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    $result = curl_exec($ch);
    return $result;
  }
  function sendSms($numbers, $message)
  {
     $xml = <<<EOS
         <request>
           <authentication>
             <username>{$this->username}</username>
             <password>{$this->password}</password>
           </authentication>
           <order>
               <sender>{$this->title}</sender>
               <sendDateTime></sendDateTime>
               <message>
                   <text>{$message}</text>
                   <receipents>
                       <number>{$numbers}</number>
                   </receipents>
               </message>
           </order>
         </request>
EOS;
    $result = $this->sendRequest($this->reqSendLink ,$xml,array('Content-Type: text/xml'));
    $xml = simplexml_load_string($result);
    
    return $xml->status->code;
    die();
  }
  function getBalance()
  {
    $xml = <<<EOS
    <?xml version="1.0" encoding="UTF-8" ?>
    <request>
            <authentication>
                    <username>{$this->username}</username>
                    <password>{$this->password}</password>
            </authentication>
    </request>
EOS;
    $result = $this->sendRequest($this->reqBalanceLink,$xml,array('Content-Type: text/xml'));
    $xml = simplexml_load_string($result);    
  if($xml->status->code == '200'){
        return $xml->balance->sms;
        die();
    }
  }
}
