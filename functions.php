<?php
function renderNav() {
    echo '
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>';
}

function renderFooter() {
    echo '
    <footer class="footer">
        <p>&copy; ' . date("Y") . ' Game Shop. All rights reserved.</p>
    </footer>';
}

function setPageTitle($title) {
    echo "<title>$title</title>";
}

function displayContent($content) {
    echo "<div class='content'>$content</div>";
}
?>
