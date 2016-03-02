$(document).ready(function () {
    $('#get-data').click(function (event)
    {
        var showData = $('#show-data');
        var name_search = document.getElementById("name_search").value;

        $.getJSON('search.php?name_search=soupe', function (data)
        {
            $('#show-data').html('<p> Id recette: ' + data.id + '</p>');
            $('#show-data').append('<p>Nom recette : ' + data.nom+ '</p>');
        });

        showData.text('Loading the JSON file.');
    });
});
