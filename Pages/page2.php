
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $("#add"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><input id="textinput" name="quantité" type="number" placeholder="0" class="form-control input-md"><p class="help-block inline">quantité</p><input id="www" type="text" list="urldata" name="adresseweb" class="form-control input-md"><p class="help-block inline">unité</p><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>

<form method="post" class="form-horizontal">
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
            <label class="col-md-4 control-label" for="textinput">Ingrédients (quantité et intitulé): </label>
            <div class="col-md-2">
                <input id="textinput" name="quantité" type="number" placeholder="0" class="form-control input-md">
                <p class="help-block inline">quantité</p>
            </div>
            <div class="col-md-2">
                <input id="www" type="text" list="urldata" name="adresseweb" class="form-control input-md">
                <p class="help-block inline">unité</p>
            </div>
            <div class="input_fields_wrap"></div>
                <button class="btn btn-default" id="add" type="button">Button</button>



                <button class="btn btn-default" id="mdr" type="button">Supprimer</button>
                <button type="submit" class="btn btn-default">envoyer</button>
        </div>
</div>

        <input type="submit" class="m_input_champ m_inscription_submit j_action" name="m_inscription_newsletter_submit" value="+" data-action="save">


<p>titre</p>
    </fieldset>
</form>