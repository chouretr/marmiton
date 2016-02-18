$(function()
{
    var x = 1;
    run();

    function run()
    {
        $(".tags").autocomplete({
            source: 'Controller/ingredient.php'
        });
    }

    $("#add_ingredient").on("click", function ()
    {
        x++;
        $('<div class="row">' +
                '<div class="col-md-4"></div>' +
                '<div class="col-md-2">' +
                    '<input id="textinput" name="quantité" type="number" placeholder="0" class="form-control input-md">' +
                    '<p class="help-block inline">quantité</p>' +
                '</div>' +

                '<div class="col-md-2">' +
                    '<input id="www" type="text" list="urldata" name="unité" class="form-control input-md">' +
                    '<p class="help-block inline">unité</p>' +
                '</div>' +

                '<div class="col-md-2">' +
                    '<input type="text" class="form-control input-md tags" />' +
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
