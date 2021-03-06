<p><a class="btn btn-primary" href="index.php?page=page2">ajout recette</a></p>

<div class="row actus" style="padding-top: 40px;">
    <div class="col-lg-5" id="last_add" style="Border: 1px solid deepskyblue; height: 200px;" >
        <h3>Derniers ajouts</h3>
        <?php foreach($last_recipe as $recette ): ?>
            <p><a href="<?= $recette->Url ;?>"><?= $recette->nom; ?></a></p>
        <?php endforeach; ?>
    </div>
    <div class="col-lg-5" id="last_add" style="Border: 1px solid deepskyblue; height: 200px;" >
        <h3>Les mieux not�es</h3>
        <?php foreach($best_likes as $recette ): ?>
            <p><a href="<?= $recette->Url ;?>"><?= $recette->nom; ?></a></p>
        <?php endforeach; ?>
    </div>

</div>


<div class="row recherche" style="padding-top: 40px;">
    <div class="col-lg-5" id="search_by_name" style="Border: 1px solid deepskyblue; height: 200px;" >
        <div class="input-group input-group-lg icon-addon addon-lg" style="padding-top: 25px;">
            <input type="text" placeholder="Rechercher une recette" name="name_search" id="name_search" class="form-control input-lg">
            <i class="icon icon-search"></i>
            <span class="input-group-btn">
                <button type="submit" id="get-data" class="btn btn-inverse">Rechercher</button>
            </span>
        </div>
        <div id="show-data">
            <!-- contenu recherche -->
        </div>
    </div>

    <div class="col-lg-5 ui-widget" style="border: 1px solid deepskyblue;min-height: 200px;padding-top: 25px;">
        <!--<form id="monform" action="search_by_ingredient.php" method="post">-->
            <input placeholder="Rechercher par ingredient" type="text" id="ingredient_1" name="ingredient_1" class="tags form-control input-lg"/>
            <!--changement-->
            <a href="#" class="btn btn-default before_rm" id="add_ingredient_search"><span class="glyphicon glyphicon-plus add_ingredient"></span></a>
            <button type="submit"  id="get-recette" class="btn btn-inverse">Rechercher</button>

            <div id="show-recette">
                <!-- contenu recherche -->
            </div>
        <!--</form>-->
    </div>
</div>

<div class="col-lg-5" id="search_by_cat" style="Border: 1px solid deepskyblue; height: 200px;" >
    <h3>Recherche par categorie</h3>
    <div class="form-group">
        <label class="col-md-4 control-label" for="typeplat">Type de plat</label>
        <div class="col-md-4">
            <select id="categorie" name="categorie" class="form-control">
                <?php foreach(App::getInstance()->getTable('Categorie')->all() as $categorie):?>
                    <option value="<?= $categorie->id; ?>"><?= $categorie->nom; ?></option>
                <?php endforeach; ?>
            </select>

        <button type="submit"  id="get_by_cat" class="btn btn-inverse">Rechercher</button>
        </div>
    </div>
    <div id="show_by_cat">
        <!-- contenu recherche -->
    </div>
</div>

