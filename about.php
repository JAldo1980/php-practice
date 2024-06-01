<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php setPageTitle('Game Shop - About Us'); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php renderNav(); ?>
    <div class="wrapper">
        <?php displayContent('
            <h1>About Us</h1>
            <p>Game Shop is a premier destination for computer game enthusiasts. Founded in 2024, we strive to bring the best gaming experience to our customers.</p>
        '); ?>
    </div>
    <?php renderFooter(); ?>
</body>
</html>
