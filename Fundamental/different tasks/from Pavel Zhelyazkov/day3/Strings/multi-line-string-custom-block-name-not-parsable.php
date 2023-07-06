<?php

$friendEmail = 'bobo@mail.com';

$emailToFriend = <<<'MailBody'
To: $friendEmail
From: me@mail.com
Subject: Just saying Hi!

How ya doin'?

MailBody;

var_dump($emailToFriend);

?>