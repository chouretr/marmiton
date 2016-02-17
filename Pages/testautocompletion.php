<form>
    <input type="text" id="ingredient" />
</form>

<?php
var liste = [
    "farine",
    "eau",
    "ricard"
];

?>
<script>
$('#ingredient').autocmplete(
{
    source : liste
});
</script>