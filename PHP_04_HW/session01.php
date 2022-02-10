<?php
// SESSIONスタート
session_start();

// SESSIONのidを取得
$sid = session_id();
echo $sid;

//SESSION変数=サーバー側に保存する変数
$_SESSION['name']= '付　ようはん';
$_SESSION['age']=  '34';
$_SESSION['from']= 'tokyo';


?>