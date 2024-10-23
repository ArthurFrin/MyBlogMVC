<?php require('layouts/header.php'); ?>

<h1>Home Page</h1>

<?php if (!empty($articles)): ?>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li>
                <a href="<?= $article->getUrl() ?>" class="article-card">
                    <div class="left">
                    <!-- <img src="<?= $article->image ?>" alt=""> -->
                    <img src="https://images.pexels.com/photos/20787/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    <div class="date">
                            2024
                        </div>
                    </div>
                    <div class="right">
                        <h4 class="title2"><?= $article->title ?></h4>
                        <p class="content-preview"><?= $article->content ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No articles found.</p>
<?php endif; ?>

<?php require('layouts/footer.php'); ?>