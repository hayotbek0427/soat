<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("2 hour"));
$kun=date("d-m-20y",strtotime("2 hour"));
$input = ["Biolaringiz"];
  $rand=array_rand($input);
  $text="$input[$rand]";
 $nik = ["Behruzbek"]; $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $time",'about'=>"⏰$time 📆$kun"]);
$MadelineProto->account->updateStatus(['offline' => false ]);

$yil = date("Y", strtotime("2 hour"));
$sana = date("d.m.Y", strtotime("2 hour"));

$logo = ["https://topmix.uz/api/api1.php?text=$soat"]; $logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

if($yil == "2020"){
header('Content-type: image/jpg');
file_put_contents("got.jpg",file_get_contents($logopic));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
$MadelineProto->photos->updateProfilePhoto(['file' => "got.jpg" ]);
?>