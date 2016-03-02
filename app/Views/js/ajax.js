$(document).ready(function () {
    $('#get-data').click(function (event)
    {
        var showData = $('#show-data');
        var name_search = document.getElementById("name_search").value;

        $.getJSON('search.php?name_search='+name_search, { get_param: 'value' }, function (data)
        {
            $.each(data,function(index, element)
            {
                $('#show-data').append($('<div>', {
                    '<a href="index.php?page=recipe&id='+element.id +'>'+element.nom+'</a>'
                }));
            });
        });
    });
});
