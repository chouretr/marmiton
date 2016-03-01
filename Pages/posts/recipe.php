
<div class="row">
    <div class="col-lg-2"></div>

    <div class="col-lg-8 bloc_recette" style="border: 1px solid black">

    <div class="row">
        <h1>

            <?php foreach ($recettes as $nom): ?>
                <?= $nom->nom; ?>
            <?php endforeach; ?>
        </h1>
    </div>
    <div class="row" id="categories">
                <?php foreach ($categories as $categorie): ?>
                    <?= $categorie->nom." -"; ?>
                <?php endforeach; ?>
        </div>
        <?php foreach ($recettes as $progress): ?>
            <?php $progression = 100 * ($progress->like_count / ($progress->dislike_count + $progress->like_count)); ?>
        <?php endforeach; ?>
        <div class="vote">
            <div class="vote_bar">
                <div class="vote_progress" style="width:<?= $progression; ?>%;">
                </div>
                <div class="vote_btns">
                    <form action="like.php?recette_id=1&vote=1" method="post">
                        <button type="submit" class="vote_btn vote_like"><i class="fa fa-thumbs-up"></i>
                        <?php foreach ($recettes as $like): ?>
                            <?= $like->like_count ?>
                        <?php endforeach; ?>
                        </button>
                    </form>
                    <form action="like.php?recette_id=1&vote=-1" method="post">
                    <button type="submit" class="vote_btn vote_dislike"><i class="fa fa-thumbs-down"></i>
                        <?php foreach ($recettes as $dislike): ?>
                            <?= $dislike->dislike_count ?>
                        <?php endforeach; ?></button></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
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
            <span>temps de preparation :</span>
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
        <h4>Ingredients : </h4>
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
        <h4>Preparation de la recette : </h4>
        <?php foreach ($recettes as $result): ?>
            <?= $result->instructions ?>
        <?php endforeach; ?>
    </div>



    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lightbox">Suivre la recette</button>
            </div>
    <div class="col-lg-2"></div>

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
                        <div class="item active">
                            <img src="http://chr-formation.com/wp-content/uploads/2015/07/1307719766826.jpg"/>
                            <div><?= $instructions[0] ?></div>
                        </div>
                        <?php for($i = 1; $instructions[$i]; $i++)
                            {
                            ?>
                            <div class="item">
                                <img src="http://www.la-recette-de-cuisine.com/main/files/71c67de0f6ca91f79b01b67094e75005.jpeg" />
                                <?= $instructions[$i] ?>
                            </div>
                            <?php
                            }
                            ?>
                    </div><!-- /.carousel-inner -->
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
    </div>

</div>