<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
 $str1 = "определяющий";
   $str2 = convert_cyr_string($str1,"w","k");
   echo ("result of translate '$str1' to koi8-r is '$str2'");
   echo ("<br>");
   $str3 = convert_cyr_string($str2,"k","w");
   echo ("result of translate '$str2' to win is '$str3'");
   echo ("<br/>");
?>
<?php
$format = "There are %d monkeys in the %s";
printf($format, $num, $location);
echo ("<br/>");
?>
<?php
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u\n", $checksum);
echo ("<br/>");
?>
<?php
echo nl2br("foo - это вам не\n bar");
echo ("<br/>");
?>
<?php
$text = "Очень длинное слоооооооооооооооово.";
$newtext = wordwrap($text, 8, " ", 1);
echo "$newtext\n";
echo ("<br/>");
?>
<?php
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
    exit;
}
echo ("<br/>");
?>