<?php
$name = $_POST["name"];
$password = $_POST["password"];
$Email_Address = $_POST["email-address"];

$file=fopen("donation.txt","a");
fwrite($file,$name); echo "\n";
fwrite($file, $password); echo "\n";
fwrite($file, $Email_Address); echo "\n";
fclose($file);

echo "THANK YOU FOR YOUR DONATION";
?>
