<html>
<head>
    <title>GROUP CLOUD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>

<br><br>
<div class=container>
<h1>GROUP CLOUD</h1>
<h3>Send your word to the tag cloud</h1>

 <div class="col-sm-10">
<div class="form-group row">
<form action="index.php" method="POST">
    <label class="form-control-label">One word</label>
    <input class="form-control" name="tag" type="text" />
    <button type="submit" class="btn btn-primary">Send</button> 
</form>
</div>
</div>

<?php

if(isset($_POST['tag'])) {
    $tag=trim($_POST['tag']);

    $tag = str_replace(
        array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó','Ú'),
        array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'Ó','U'),
        $tag
    );

    $data = $tag . "\n";
    $ret = file_put_contents('/tmp/groupcloud.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "¡Thanks!";
    }
}
?>

</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>

