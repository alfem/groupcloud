<html>
<head>
    <title>GROUP CLOUD</title>
    <meta charset="UTF-8">
</head>
<body>
<center>

Send your word to the cloud:
<form action="index.php" method="POST">
    <input name="tag" type="text" />
    <input type="submit" name="submit" value="Enviar">
</form>

<?php

if(isset($_POST['tag'])) {
    $data = $_POST['tag'] . "\n";
    $ret = file_put_contents('/tmp/groupcloud.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "¡Thanks!";
    }
}
?>

</center>
</body>

