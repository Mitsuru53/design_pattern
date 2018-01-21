<?php 
require_once 'Chatroom.class.php';
require_once 'User.class.php';

$chatroom = new Chatroom();

$sasaki = new User('佐々木');
$sasaki = new User('鈴木');
$sasaki = new User('吉田');
$sasaki = new User('川村');
$sasaki = new User('田島');

$chatroom->login($sasaki);
$chatroom->login($suzuki);
$chatroom->login($yoshida);
$chatroom->login($kawamura);
$chatroom->login($tajima);

$sasaki->sendMessage('鈴木', '来週の予定は?');
$suzuki->sendMessage('川村', '秘密です');
$yosida->sendMessage('荻原', '元気ですか?');
$tajima->sendMessage('佐々木', 'お邪魔してます?');
$kawamura->sendMessage('吉田', '私事で恐縮ですが…ß');
 ?>