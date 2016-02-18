<form method="post" class="form-horizontal" action="./model/add_recipe.php">
    <fieldset>

        <!-- Nom du formulaire -->
        <legend>Saisie de votre recette</legend>
        <h5>Titre de votre recette :</h5>
        <!-- Ici on implémentera le nom saisie sur une page précédente avec un $_GET[]-->


        <!-- Type de plat -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="typeplat">Type de plat</label>
            <div class="col-md-4">
                <select id="typeplat" name="typeplat" class="form-control">
                    <option value="">Entrée</option>
                    <option value="">Plat principal</option>
                    <option value="">Dessert</option>
                    <option value="">Accompagnement</option>
                    <option value="">Amuse-gueule</option>
                    <option value="">Boisson</option>
                    <option value="">Confiserie</option>
                    <option value="">Sauce</option>
                    <option value="">Conseil</option>
                </select>
            </div>
        </div>

        <!-- Végétarien -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Végétarien:</label>
            <div class="col-md-4">
                <label class="radio-inline" for="végétarien">
                    <input type="radio" name="radios" id="radios-0" value="" checked="checked">
                    Oui
                </label>
                <label class="radio-inline" for="radios-1">
                    <input type="radio" name="radios" id="radios-1" value="">
                    Non
                </label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="difficulté"></label>
            <div class="col-md-4">
                <select id="difficulté" name="difficulte" class="form-control">
                    <option value="">Facile</option>
                    <option value="">Moyen</option>
                    <option value="">Difficile</option>
                    <option value="">Trés difficile</option>
                </select>
            </div>
        </div>

        <legend></legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Temps de préparation: </label>
            <div class="col-md-2">
                <input id="textinput" name="textinput" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline">heure(s)</p>
                <input id="textinput" name="textinput" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline">minute(s)</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Temps de cuisson: </label>
            <div class="col-md-2">
                <input id="textinput" name="textinput" type="number" min="0" placeholder="0" class="form-control input-md">
                <p class="help-block inline">heure(s)</p>
                <input id="textinput" name="textinput" type="number" min="0" placeholder="0" class="form-control input-md">
                <p class="help-block inline">minute(s)</p>
            </div>
        </div>
        <legend></legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nombre de portions: </label>
            <div class="col-md-2">
                <span>Pour</span>
                <input id="textinput" name="textinput" type="number" min="1" placeholder="0" class="form-control input-md">
                <p class="help-block inline"></p>
                <span>personnes</span>
            </div>
        </div>

        <legend></legend>

        <div class="form-group">
            <div class="row">
                <label class="col-md-4 control-label" for="textinput">Ingrédients (quantité et intitulé): </label>
                <div class="col-md-2">
                    <input id="textinput" name="quantite_1" type="number" placeholder="0" class="form-control input-md">
                    <p class="help-block inline">quantité</p>
                </div>
                <div class="col-md-2">
                    <input id="www" type="text" list="urldata" name="unite_1" class="form-control input-md">
                    <p class="help-block inline">unité</p>
                </div>
                <div class="col-md-2">
                    <input type="text" name="ingredient_1" class="form-control input-md tags" />
                    <p class="help-block inline">ingrédient</p> <!--changement-->
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="ui-widget">

            </div>
            <div class="input_fields_wrap">
                <!-- contenu JS    -->
            </div>

            <a href="#" class="btn btn-default" id="add_ingredient"><span class="glyphicon glyphicon-plus add_ingredient"></span></a>
        </div>

        <legend></legend>
        <!-- Etapes de la recette -->

        <div class="form-group">
            <div class="row">
                    <label class="col-md-4">Préparation de la recette :</label>
            </div>
             <div class="row_etape">
                        <label class="col-md-4 control-label" for="etape_1">Etape 1:</label>
                        <div class="col-md-6">
                            <textarea id="etape" name="etape_1'" class="form-control input-md "></textarea>
                        </div>
                        <div class="col-md-2">

                        </div>
             </div>

            <div class="input_field_wrap_etapes">
                <!-- contenu via js -->
            </div>
            <a href="#" class="btn btn-default" id="add_etape"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    <input type="submit" value="Valider" />
    </fieldset>
</form>