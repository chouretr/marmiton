$(function()
{
    var x = 1;
    var i = 1;

    run();



    function run()
    {
        $(".tags").autocomplete({
            source: '../app/Table/Script.php'
        });
    }

    $("#add_etape").on("click", function ()
    {
        i++;
        $('<div>' +
                '<label class="col-md-4 control-label" for="etape">Etape: ' + i + '</label>' +

                '<div class="col-md-6">' +
                    '<textarea id="etape" name="etape_' + i + '" class="form-control input-md "></textarea>' +
                '</div>' +

                '<a href="#" class="btn btn-default remove_fields">' +
                    '<span class="glyphicon glyphicon-remove"></span>' +
                '</a>' +

            '</div>').appendTo('.row_etape');

        return false;
    });


    var test         = $(".row_etape");
    $(test).on("click",".remove_fields", function(e)
    { //user click on remove text
        i--;
        e.preventDefault(); $(this).parent('div').remove();

    })

    $("#add_ingredient").on("click", function () {
        x++;
        $('<div class="row">' +
                '<div class="col-md-4"></div>' +
                '<div class="col-md-2">' +
                    '<input id="textinput" name="quantite_' + x + '" type="number" placeholder="0" class="form-control input-md">' +
                    '<p class="help-block inline">quantité</p>' +
                '</div>' +

                '<div class="col-md-2">' +
                    '<input id="www" type="text" list="urldata" name="unite_' + x + '" class="form-control input-md">' +
                    '<p class="help-block inline">unité</p>' +
                '</div>' +

                '<div class="col-md-2">' +
                    '<input type="text" name="ingredient_' + x + '" class="form-control input-md tags" />' +
                    '<p class="help-block inline">ingrédient</p>' +
                '</div>' +

                '<a href="#" class="btn btn-default remove_field">' +
                    '<span class="glyphicon glyphicon-remove"></span>' +
                '</a>' +

        '</div>').appendTo('.ui-widget');

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
});

