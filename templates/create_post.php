<?php include("top.php"); ?>

<!-- attribut enctype : essentiel pour pouvoir faire de l'upload !  -->
<form method="post" enctype="multipart/form-data">
    <h2>Posez votre question !</h2>

    <?php 
        if (!empty($errors)) {
            echo '<div class="alert alert-danger"><h4>Oh shit !</h4>';
            foreach ($errors as $error) {
                echo '<div>' . $error . '</div>';
            }
            echo '</div>';
        }
    ?>

    <div class="form-group"> 
        <label for="title">Votre titre</label>
        <input class="form-control" type="text" id="title" name="title" value="<?php if(!empty($_POST['title'])){
            echo $_POST['title'];
        } ?>" placeholder="Un titre ">
    </div>

    <div class="form-group"> 
        <label for="content">Votre question</label>
        <textarea class="form-control" type="text" placeholder="Votre contenus" id="content" name="content" rows="10"><?php if(!empty($_POST['content'])){
            echo $_POST['content'];
        } ?></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-success">Publier !</button>
    </div>
</form>

<section class="d-flex flex-wrap justify-content-between">
<?php foreach($posts as $post){ ?>
    <article class="card mb-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $post['title']; ?></h5>
            <p class="card-text"><?= mb_substr($post['content'], 0, 150); ?>[...]</p>
            <a href="index.php?page=detail&id=<?= $post['id'] ?>" class="btn btn-primary">Lire le contenus </a>
        </div>
    </article>
<?php } ?>
</section>

<?php include("bottom.php"); ?>