<?php ob_start(); ?>

    <div id="page">

        <section class="content">
            <!-- On affiche chaque entrée une à une -->
            <?php while ($data = $posts->fetch()){ ?>

                <div class="content__item">
                    <h3><?= $data['titre']; ?></h3>
                    <p><?= $data['texte']; ?></p>
                </div> 

            <?php } ?>
        </section>
    </div>
    
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
