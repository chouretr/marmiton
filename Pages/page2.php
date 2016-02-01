<form class="form-horizontal">
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
                <select id="difficulté" name="difficulté" class="form-control">
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
                <input id="textinput" name="textinput" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline">heure(s)</p>
                <input id="textinput" name="textinput" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline">minute(s)</p>
            </div>
        </div>
        <legend></legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Nombre de portions: </label>
            <div class="col-md-2">
                <span>Pour</span>
                <input id="textinput" name="textinput" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline"></p>
                <span>personnes</span>
            </div>
        </div>

        <legend></legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Ingrédients (quantité et intitulé): </label>
            <div class="col-md-2">
                <input id="textinput" name="quantité" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline">quantité</p>
                <select id="selectbasic" name="selectbasic" class="form-control">
                    <option value="1">Option one</option>
                    <option value="2">Option two</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="unité" class="col-md-4 control-label">Unité</label>
            <div class="col-md-2">
                <input list="bieres" type="text" id="unité">
                <datalist id="unité">
                    <label for="unité">unité</label>
                    <select name="unité" id="unité">
                        <option value="grammes">grammes</option>
                        <option value="litre(s)">litres</option>
                    </select>
                </datalist>
            </div>
        </div>

        <datalist id="elements">
            <select>
                <option value="sans label ni contenu"></option>
                <option value="sans label avec contenu texte">le texte</option>
                <option value="avec label" label="le label"></option>
                <option value="avec label et texte" label="le label">le texte</option>
            </select>
        </datalist>

        <p>merde</p>


    </fieldset>
</form>

