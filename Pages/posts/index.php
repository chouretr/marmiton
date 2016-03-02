<p><a href="index.php?page=page2">ajout recette</a></p>


<h1>Recette</h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach($recettes as $recette ): ?>
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

            <input placeholder="Rechercher par ingredient" type="text" name="ingredient_1" class="tags form-control input-lg"/>
        <!--changement-->


        <a href="#" class="btn btn-default before_rm" id="add_ingredient_search"><span class="glyphicon glyphicon-plus add_ingredient"></span></a>

            <button type="submit"  id="get-recette" class="btn btn-inverse">Rechercher</button>

        <div id="show-recette">
            <!-- contenu recherche -->
        </div>
    </div>




</div>



