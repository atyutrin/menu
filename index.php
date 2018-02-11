<?php require('config.php'); ?>
<?php require('menu.php'); ?>
<?php $menu = new Menu;; ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
    <body>
        <div class="sidenav">
            <?php $menu->render(); ?>
        </div>
    </body>
</html>