<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
    <title>Header 2</title>
</head>

<body>
    <?php
    foreach ($this->menuItems as $key => $value) {
        echo $value;
        echo '<br>';
    }

    ?>