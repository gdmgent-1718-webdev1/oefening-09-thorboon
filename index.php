<?php
$isSubmitted= isset($_REQUEST['submit']);
if($isSubmitted){
    $search = $_GET['search'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier GET methode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<?php if($isSubmitted): ?>
    <h1><?=$search ?></h1>
<?php else: ?>
    <form action="" method="GET">
        <div class="form-group row">
            <label for="input-search">Zoeken:</label>
            <input class="form-control" in="input-search" type="text" name="search">
        </div>
        <div class="row">
            <input class="btn btn-primary" type="submit" name="submit" value="Zoeken">
        </div>
    </form>
<?php endif ?>    
    </div>
<pre>
<code>
    <?php
    if($isSubmitted){
        ECHO 'GET';
        var_dump($_GET);
        ECHO 'POST';
        var_dump($_POST);
        ECHO 'REQUEST';
        var_dump($_REQUEST);
    }
    ?>
</code>
</pre>
</body>
</html>