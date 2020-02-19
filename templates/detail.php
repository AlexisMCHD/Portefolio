<!-- include le head et le header... -->
<?php include("top.php") ?>

<h2><?= $post['title'] ?></h2>

<div>
    <?= $post['content'] ?>
</div>
<div>Posté par: <?= $post['username']; ?></div>

<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>
