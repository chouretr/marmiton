<p><a href="index.php?page=page2">lien vers la page 2</a> </p>
<p><a href="index.php?page=recipe">lien vers la page de aff_recipe</a> </p>
<p><a href="index.php?page=modal">lien vers modal</a> </p>

<h1>Je suis la page d'accueil</h1>
sdqsdsd
<div class="row">
    <div class="col-sm-8">
        <?php foreach($recettes as $recette ): ?>
            <p><?= $recette->nom; ?></p>
        <?php endforeach; ?>
        <?php foreach($categories as $cateorie ): ?>
            <p><?= $cateorie->nom; ?></p>
        <?php endforeach; ?>
    </div>
</div>


