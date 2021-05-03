# Php Mail Library

It is a small library that will meet all your mail requests with php.

# Examples :
###  Install Using Composer :

    composer require m4s3s7/maillibrary
###  Get Mail

    $messages = $imap->getMessages('type');
    print_r($messages);

#### outpu:

     array( Array ( [uid] => 35 [subject] => Hi Mustafa - Snooze this email! [date] => 2020-02-24 12:26:50pm [from] => Array ( [address] => hello@examplemail.com [name] => mail Team ) [message] => example Message
    [attachments] => Array ( ) )

### Get Mail Boxes

    $messages = $imap->getMailboxes('{imap.yandex.com:993/imap/ssl/novalidate-cert}');
      $data = array(
        'data'  => $messages['data']
      );
      print_r($data);

#### output :

    Array ( [data] => Array ( [0] => Archive [1] => Drafts [2] => INBOX [5] => Notes [6] => Notes [7] => Outbox [8] => Sent [9] => Spam [10] => Taslaklar [11] => Trash ) )

###  Get Message

    $message = $imap->loadMessage('uid', 'type');
    print_r($message);
