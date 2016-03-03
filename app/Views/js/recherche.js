$(function()
{
    var x = 1;
    run();
    function run()
    {
        $(".tags").autocomplete({
            source: '../app/Table/Script.php'
        });
    }

    $("#add_ingredient_search").on("click", function () {
        x++;
        $('<div>' +
            '<input placeholder="Rechercher par ingredient" type="text" id="ingredient_' + x + '" name="ingredient_' + x + '" class="tags form-control input-lg" style="padding-top: 25px;" />' +

            '<a href="#" class="btn btn-default remove_field">' +
            '<span class="glyphicon glyphicon-remove"></span>' +
            '</a>' +

            '</div>').insertBefore('.before_rm');

        $(".tags").each(function ()
        {
            run();
        });

        return false;
    });

    var wrapper         = $(".ui-widget");
    $(wrapper).on("click",".remove_field", function(e)
    { //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
/*
    $('#monForm').on('submit', function(e)
    {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

        var $this = $(this); // L'objet jQuery du formulaire
        var i = 1;
        while(i < x);
        var recipe_name_search = [];
        var pseudo = $('#pseudo').val();
        var mail = $('#mail').val();

        // Je vérifie une première fois pour ne pas lancer la requête HTTP
        // si je sais que mon PHP renverra une erreur
        if(pseudo === '' || mail === '') {
            alert('Les champs doivent êtres remplis');
        } else {
            // Envoi de la requête HTTP en mode asynchrone
            $.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(html) { // Je récupère la réponse du fichier PHP
                    alert(html); // J'affiche cette réponse
                }
            });
        }
    });*/

    $('#get-recette').click(function (event)
    {
        var showData = $('#show-recette');
        var i = 1;
        var recipe_name_search = [];
        var url = 'search_by_ingredient.php?';
        while (i < x)
        {
            tmp = 'ingredient_'+i;
            recipe_name_search.push(document.getElementById(tmp).value);
            url += tmp + '=' + recipe_name_search[i - 1] + '&';
            i++;
        }
        url = url.substring(0, url.length - 2); // On retire le "&" de trop


        /*
        $.each(recipe_name_search, function( index, value )
        {
            alert( index + ": " + value );
        });*/

        $.getJSON(tmp, { get_param: 'value' }, function (data)
        {
            $.each(data,function(index, element)
            {
                $('#show-data').append($('<div>', {
                    html : '<a href="index.php?page=recipe&id='+element.id +'">'+element.nom+'</a>'
                }));
            });
        });
    });
});

