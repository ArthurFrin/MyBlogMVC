<?php require('layouts/header.php'); ?>

<h1>Home Page</h1>

<?php if (!empty($articles)): ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><?= htmlspecialchars($article->title); ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No articles found.</p>
<?php endif; ?>

<?php require('layouts/footer.php'); ?>
