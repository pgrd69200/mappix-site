<?php
$page = $_GET['page'] ?? 'home';
$title = strtoupper($page); 

include __DIR__ . '/includes/header.php';

$allowed = ['home', 'contact', 'about', 'services', 'faq', 'legal', 'blog', 'gallery'];

if (!in_array($page, $allowed)) {
    echo "<h2>404 - Page introuvable</h2>";
} else {
    // Vérifie bien que ton dossier s'appelle "pages"
    include __DIR__ . "/pages/$page.php";
}

include __DIR__ . '/includes/footer.php';
?>