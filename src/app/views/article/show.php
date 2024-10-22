<?php require(__DIR__ . '/../layouts/header.php'); ?>

<?php
if (!empty($article)) {
    ?>
    <h1><?= htmlspecialchars($article->title); ?></h1>
    <p><?= htmlspecialchars($article->content); ?></p>
    <p><a href="<?= $article->getUrl(); ?>">Read more</a></p>
    <?php
} else {
    ?>
    <p>No article found.</p>
    <?php
}
?>

<?php require(__DIR__ . '/../layouts/footer.php'); ?>