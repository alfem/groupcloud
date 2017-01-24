<?php

$file = fopen("/tmp/groupcloud.txt", "r");
$lines=array();

while(!feof($file)) {
 $line=strtolower(rtrim(fgets($file)));
 if (strlen($line) > 3) {
   $lines[]=$line;
 }
}

fclose($file);

$count = array_count_values($lines);

foreach ($count as $k => $v) {
  print $k.",".$v."\n";
}

?>
