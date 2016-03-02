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
            '<input placeholder="Rechercher par ingredient" type="text" name="ingredient_' + x + '" class="tags form-control input-lg" style="padding-top: 25px;" />' +

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
        var showData = $('#show-recette');
        var i = '1';
        var recipe_name_search = []
        while (i < x)
        {
            recipe_name_search.push(document.getElementById('ingredient_'+x).value);
        }

        $.getJSON('search.php?name_search='+name_search, { get_param: 'value' }, function (data)
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

