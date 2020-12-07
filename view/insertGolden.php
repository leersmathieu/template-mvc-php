<?php ob_start(); ?>

    <div id="page">
        <form action="insertGolden" method="post" class="formInsert">
            <input type="text" placeholder="username" name="user" class="titre">
            <textarea type="text" placeholder="texte" name="text" class="texte"></textarea>
            <input type="submit" value="Submit" class="submit">
        </form>
        <a class="turnBack" href="goldenbook">retour</a>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>