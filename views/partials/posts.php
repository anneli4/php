<h3 class="pb-4 mb-4 fst-italic border-bottom">
    From the Firehose
</h3>

<?php foreach ($posts as $post): ?>
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1"><?= htmlspecialchars($post['title']) ?></h2>
        <p class="blog-post-meta">
            <?= htmlspecialchars($post['date']) ?> by 
            <a href="#"><?= htmlspecialchars($post['author']) ?></a>
        </p>
        <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    </article>
<?php endforeach; ?>

<nav class="blog-pagination" aria-label="Pagination">
    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
</nav>
