<?php ob_start(); ?>

    <div id="page">
        <form action="insert" method="post" class="formInsert">
            <input type="text" placeholder="titre" name="titre" class="titre">
            <textarea type="text" placeholder="texte" name="texte" class="texte"></textarea>
            <input type="submit" value="Submit" class="submit">
        </form>
        <a class="turnBack" href="wall">retour</a>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>