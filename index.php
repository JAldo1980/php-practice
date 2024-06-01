<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php setPageTitle('Game Shop - Home'); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php renderNav(); ?>
    <div class="container">
        <?php displayContent('
            <h1>Welcome to Game Shop</h1>
            <p>Your one-stop shop for the latest and greatest computer games.</p>
        '); ?>
    </div>
    <?php renderFooter(); ?>
</body>
</html>
