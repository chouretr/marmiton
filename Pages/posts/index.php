<p><a href="index.php?page=page2">ajout recette</a></p>


<h1>Recette</h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach($recettes as $recette ): ?>
            <p><a href="<?= $recette->Url ;?>"><?= $recette->nom; ?></a></p>
        <?php endforeach; ?>
    </div>
</div>


    <div class="input-group input-group-lg icon-addon addon-lg">
        <input type="text" placeholder="Rechercher une recette" name="name_search" id="name_search" class="form-control input-lg">
        <i class="icon icon-search"></i>
        <span class="input-group-btn">
            <button type="submit" id="get-data" class="btn btn-inverse">Rechercher</button>
        </span>
    </div>
    <div id="show-data">

        <!-- contenu recherche -->
    </div>



