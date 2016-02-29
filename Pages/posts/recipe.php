
    <div class="row" id="categories">
                <?php foreach ($categories as $categorie): ?>
                    <?= $categorie->nom." -"; ?>
                <?php endforeach; ?>
    </div>

    <div class="row" id="description">
        <?php foreach ($recettes as $description): ?>
            <?= $description->description ?>
        <?php endforeach; ?>
    </div>

    <div class="row" id="notes">
        <p>ici on mettra les notes quand on les auras !</p>
    </div>

    <div class="row" id="temps_prep">
        <?php foreach ($recettes as $result): ?>
            <span>temps de préparation :</span>
            <?= $result->temps_preparation_minute; ?>
        <?php endforeach; ?>
    </div>

    <div class="row" id="temps_cuisson">
        <?php foreach ($recettes as $result): ?>
            <span>temps de cuisson :</span>
            <?= $result->temps_cuisson_minute; ?>
        <?php endforeach; ?>
    </div>

    <div class="row" id="ingredients">
        <ul>
            <?php foreach ($ingredients as $result) {
                echo "<li>";
                echo "- " . $result->quantite;
                echo " " . $result->unite;
                echo " " . $result->ingredient;
                echo "</li>";
            }?>
        </ul>
    </div>

    <div class="row" id="instructions">
        <?php foreach ($recettes as $result): ?>
            <?= $result->instructions ?>
        <?php endforeach; ?>
    </div>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lightbox">Suivre la recette</button>
    <?php var_dump($instructions); ?>


<div class="modal fade and carousel slide" id="lightbox">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">

                <ol class="carousel-indicators">
                    <li data-target="#lightbox" data-slide-to="0" class="active"></li>
                    <li data-target="#lightbox" data-slide-to="1"></li>
                    <li data-target="#lightbox" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                    <div class="item">
                        <h1> merde</h1>
                    </div>


                </div>

                <!-- /.carousel-inner -->
                <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            
            </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

