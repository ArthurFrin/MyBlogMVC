<?php require(__DIR__ . '/../layouts/header.php'); ?>

<?php

if (!empty($article)) {
?>
    <header class="header">
        <a href="/" class="logo-container">
            <img src="/back_icon.svg" alt="back to home">
        </a>
        <h1><?= $article->title; ?></h1>
    </header>
    <img class="img-banner" src="<?= $article->image_url; ?>" alt="Article Image">
    <div class="single-article date">
        <?= (new DateTime($article->created_at))->format('d/m/Y') ?>
    </div>
    <article class="article-container">
        <?= $article->content; ?>
        <p><a href="<?= $article->getUrl(); ?>">Read more</a></p>
    </article>
<?php
} else {
?>
    <p>No article found.</p>
<?php
}
?>

<?php require(__DIR__ . '/../layouts/footer.php'); ?>