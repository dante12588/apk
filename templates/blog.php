<?php
include 'include/header.php';

// echo $title;
?>

<div class="n-width posts mt-100">
    <?php foreach($posts as $post){ ?>
        <div class="post" style="--a: url('../<?php if ($post['image']) {
            echo $post['image'];} else {
            echo 'img/post.jpg';
            } ?>')">
            <h3 class="post__title"><?php echo $post['title'] ?></h3>
            <p class="post__content"><?php echo limit_text($post['content'], 20) ?></p>
            <span class="post__date"><?php echo postDate($post['date']); ?></span>
    </div>
    <?php } ?>
</div>
<?php
include 'include/footer.php';