<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
    <title><?php echo self::titulo ?></title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Logo Marca</h2>
            </div>
            <nav class="menu">
                <?php
                foreach ($this->menuItems as $key => $value) {
                    echo '<a href="' . INCLUDE_PATH . strtolower($value) . '">' . $value . '</a>';
                }
                ?>
            </nav>
            <div class="clear"></div>
        </div>
    </header>