/*$(function() {
    $( "#ingredients" ).autocomplete({
        source: 'Controller/ingredient.php'
    });
});*/

$(function() {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];

    run();


run();

function run() {
    $(".tags").autocomplete({
        source: 'Controller/ingredient.php'

    });
}


$( "#add_ac" ).on( "click", function() {
    $('<input type="text" class="tags" />').appendTo('.ui-widget');
    $(".tags").each(function() {
        run();
    });
    //   i++; your code is here
    return false;
});

});


$(document).ready(function()
{
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $("#add_ingredient"); //Add button ID

    var x = 1; // nombre initial
    $(add_button).click(function(e)
    { // sur un click "ajouter"
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div>' +
                                  '<div class="col-md-4"></div>' +
                                  '<div class="col-md-2">' +
                                          '<input id="textinput" name="quantité" type="number" placeholder="0" class="form-control input-md">' +
                                          '<p class="help-block inline">quantité</p>' +
                                  '</div>' +
                                  '<div class="col-md-2">' +
                                          '<input id="www" type="text" list="urldata" name="adresseweb" class="form-control input-md">' +
                                          '<p class="help-block inline">unité</p>' +

                                  '</div>' +
                '<a href="#" class="btn btn-default remove_field"><span class="glyphicon glyphicon-remove"></span></a>' +
                                  '<div class="col-md-4"></div>' +

                              '</div>'); // ajout d'une ligne d'inputs pour ajouter un ingrédient
        }
    });

    $(wrapper).on("click",".remove_field", function(e)
    { //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});