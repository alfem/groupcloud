<html>
<head>
<title>GROUP CLOUD</title>
<meta charset="UTF-8">
</head>

<body>

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

echo "<table>";

foreach ($count as $k => $v) {
  print "<tr><td>".$k."</td><td>".$v."</td></tr>\n";
}

echo "</table>";

if(isset($_POST['reset'])) {
 echo "<br><b>Eliminando contenido</b>";
 $file = fopen("/tmp/groupcloud.txt", "w");
 fclose($file);
}

?>

<form action="reset.php" method="POST">
    <input name="reset" type="hidden" />
    <input type="submit" name="submit" value="Delete all these words">
</form>


</body>
</html>
