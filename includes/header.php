<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Mon Site'; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>PROJET CYBERSÉCURITÉ CIEL</h1>
        <nav>
            <a href="index.php?page=home" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Accueil</a>
            <a href="index.php?page=about" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">À propos</a>
            <a href="index.php?page=services" class="<?php echo ($page == 'services') ? 'active' : ''; ?>">Services</a>
            <a href="index.php?page=faq" class="<?php echo ($page == 'faq') ? 'active' : ''; ?>">FAQ</a>
            <a href="index.php?page=contact" class="<?php echo ($page == 'contact') ? 'active' : ''; ?>">Contact</a>
            <a href="index.php?page=blog" class="<?php echo ($page == 'blog') ? 'active' : ''; ?>">Blog</a>
            <a href="index.php?page=gallery" class="<?php echo ($page == 'gallery') ? 'active' : ''; ?>">Galerie</a>
            <a href="index.php?page=snake" class="<?php echo ($page == 'snake') ? 'active' : ''; ?>">Mini-Jeu</a>
            <a href="index.php?page=legal" class="<?php echo ($page == 'legal') ? 'active' : ''; ?>">Mentions Légales</a>
        </nav>
    </header>
    <main>