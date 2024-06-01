<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $feedback = "Thank you, $name! We will respond to your message sent from $email shortly.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php setPageTitle('Game Shop - Contact Us'); ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php renderNav(); ?>
    <div class="container">
        <?php displayContent('
            <h1>Contact Us</h1>
            <p>Have questions or feedback? Reach out to us!</p>
            <form action="contact.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Submit</button>
            </form>
        '); ?>
        <?php if (!empty($feedback)) echo "<p>$feedback</p>"; ?>
    </div>
    <?php renderFooter(); ?>
</body>
</html>
