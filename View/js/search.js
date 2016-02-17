$(document).ready(function()
{
    $.("#ingredient").keyup(function()
    {
        var ingredient= $(this).val();
        var data = 'motclef=' + ingredient;
        if(recherche.lenght>)2)
    {
        $.ajax(
            {
                type : "GET",
                url : "result.php"
            }
    }
}

}
)
}