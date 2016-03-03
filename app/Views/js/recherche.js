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

    $('#get-recette').click(function (event)
    {
        var showRecette = $('#show-recette');
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
        url = url.substring(0, url.length - 1); // On retire le "&" de trop
        //alert(url);
        $.getJSON(url, { get_param: 'value' }, function (data)
        {
            $.each(data,function(index, element)
            {
                $('#show-recette').append($('<div>', {
                    html : '<a href="index.php?page=recipe&id='+element.id +'">'+element.nom+'</a>'
                }));
            });
        });
    });
});

