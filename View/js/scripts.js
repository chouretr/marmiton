<script>
$(function() {
    $( "#ingredients" ).autocomplete({
        source: 'Controller/ingredient.php'
    });
});
</script>