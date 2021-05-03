<?php
namespace m4s3s7\Tests;

include_once "../vendor/autoload.php";

use Mail\Mail;

class GetMail{

  function mail(){
    $imap = new Mail();
    $connection_result = $imap->connect('{imap.yandex.com:993/imap/ssl/novalidate-cert}', 'm.sevindi@sezginmarble.com', 'asd123');
    if ($connection_result !== true) {
      echo $connection_result; //Error message!
      exit;
    }else {
      $messages = $imap->getMessages('html');
      return $messages;
    }
  }
  function mailBoxes(){
    $imap = new Mail();
    $connection_result = $imap->connect('{imap.yandex.com:993/imap/ssl/novalidate-cert}', 'm.sevindi@sezginmarble.com', 'asd123');
    if ($connection_result !== true) {
      echo $connection_result; //Error message!
      exit;
    }else {
      $messages = $imap->getMailboxes('{imap.yandex.com:993/imap/ssl/novalidate-cert}');
      $data = array(
        'data'  => $messages['data']
      );
      $messagesBox = array();
      foreach($data as $dataArray){
        for ($i=0; $i <count($dataArray); $i++) {
          preg_match_all('#^{(.*?)}(.*?)$#', $dataArray[$i], $mailShoot);
          $messagesBox[] = $mailShoot[2][0];
        }
        return array("data" => $messagesBox);
      }
    }
  }
}
