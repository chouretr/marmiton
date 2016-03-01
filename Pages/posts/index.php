<p><a href="index.php?page=page2">ajout recette</a></p>


<h1>Recette</h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach($recettes as $recette ): ?>
            <p><a href="<?= $recette->Url ;?>"><?= $recette->nom; ?></a></p>
        <?php endforeach; ?>
    </div>
</div>




