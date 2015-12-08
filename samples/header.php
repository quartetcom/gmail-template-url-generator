<?php
$config = require __DIR__ . '/config.php';
preg_match('/(\d+)\.php$/', $_SERVER['SCRIPT_FILENAME'], $m);
$currentId = isset($m[1]) ? $m[1] : null;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Gmail Template URL Generator</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="..">Gmail Template Url Generator</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm">
                    <ul class="nav nav-pills nav-stacked">
                        <?php foreach ($config as $id => $name): ?>
                            <li class="<?php echo $id == $currentId ? 'active' : '' ?>"><a href="<?php echo $id . '.php'; ?>"><?php echo $name; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-8">
