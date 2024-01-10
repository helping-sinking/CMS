<?php
$content = getContent();
?>

<section>
    <article>
        <h2>Latest Article</h2>
        <p><?php echo $content['latest_article']; ?></p>
    </article>

    <article>
        <h2>Featured Article</h2>
        <p><?php echo $content['featured_article']; ?></p>
    </article>
</section>
