<?php ob_start(); ?>

    <div class="page">
        <section class="content">
            <a class="content__button" href="insertGolden"> 
                <input type="submit" value="Laisse une trace..." class="submit">
            </a>
            <!-- On affiche chaque entrée une à une -->
            <?php while ($data = $posts->fetch()){ ?>

                <div class="content__item">
                    <h3><?= $data['user']; ?></h3>
                    <p><?= $data['text']; ?></p>
                    <p class="date"><?= $data['datetime']; ?></p>
                </div> 

            <?php } ?>
        </section>
         
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
