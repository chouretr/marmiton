<?php
include 'Controller/aff_recipe_sql.php';
?>

    <div class="row" id="categories">
                <?php foreach ($categorie as $result): ?>
                    <?= $result->nom." -"; ?>
                <?php endforeach; ?>
    </div>
    <div class="row" id="notes">
        <p>ici on mettra les notes quand on les auras !</p>
    </div>

    <div class="row" id="temps_prep">
        <?php foreach ($tpsprep as $result): ?>
            <?= $result->temps_preparation_minute; ?>
        <?php endforeach; ?>
    </div>

    <div class="row" id="temps_cuisson">
        <?php foreach ($tpscuisson as $result): ?>
            <?= $result->temps_cuisson_minute; ?>
        <?php endforeach; ?>
    </div>

    <div class="row" id="ingredients">
        <ul>
            <?php foreach ($ingredients as $result): ?>
                <?php
                    echo "<li>";
                    echo "- ".$result->quantite;
                    echo " ".$result->unite;
                    echo " ".$result->ingredient;
                    echo "</li>";
                ?>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="row" id="preparation">

    </div>

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Suivre la recette</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

