<?php require('layouts/header.php'); ?>

<header class="header home-header">
    <div class="logo-container">
        <img src="/logo.svg" alt="logo">
    </div>
    <h1>Articles to read not to be missed</h1>
</header>

<?php if (!empty($articles)): ?>
    <ul class="article-list">
        <?php foreach ($articles as $article): ?>
            <li>
                <a href="<?= $article->getUrl() ?>" class="article-card">
                    <div class="left">
                    <img src="<?= $article->image_url ?>" alt="">
                    <div class="date">
                           <?= (new DateTime($article->created_at))->format('d/m/Y') ?>
                    </div>
                    </div>
                    <div class="right">
                        <h4 class="title2"><?= $article->title ?></h4>
                        <p class="content-preview"><?= $article->content_preview; ?></p>

                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No articles found.</p>
<?php endif; ?>

<?php require('layouts/footer.php'); ?>