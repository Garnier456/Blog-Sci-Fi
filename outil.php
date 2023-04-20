<div>
    <?php foreach ($users as $user) : ?>
        <p><?= $user['username'] ?> <a href="banned.php?id=<?= $user['id']; ?>">Bannir</a></p>
    <?php endforeach; ?>

    <?php foreach($articles as $article): ?>
        <h2><?= $article['title'] ?></h2>
        <time> <?= $article['created_at'] ?></time>
        <br>
        <a href="delete.php?id=<?= $article['id']; ?>">Supprimer</a>
        <a href="update.php?id=<?= $article['id']; ?>">Modifier</a>
    <?php endforeach; ?>
</div>



<form action="addArticle.php" method="POST" enctype="multipart/form-data">
    <label for="image">Image</label>
    <input type="file" name="image" id="image"><br>



    <label for="title">titre</label>
    <input type="text" name="title" id="title">

    <label for="content">description</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>


    <label for="category">Catégorie</label>
    <select name="category" id="category">
        <?php
            $getCategory = $pdo->query("SELECT * FROM categories");
            while ($category = $getCategory->fetch()) {
                echo '<option>' . $category['name'] . '</option>';
            }
        ?>
    </select>
    <input type="submit" name="envoi">
</form>