<p><a href="index.php?page=page2">lien vers la page 2</a> </p>

<h1>Je suis la page d'accueil</h1>

<h2>lol</h2>

<form method="get" action="accueil.php">
    <label for="www">Adresse web</label>
    <input id="www" type="text" list="urldata" name="adresseweb">
    <datalist id="urldata">
        <label for="adresse">ou sélectionner dans la liste</label>
        <select name="adresse" id="adresse">
            <option value="http://www.alsacreations.com/">http://www.alsacreations.com/</option>
            <option value="http://www.bing.com/">http://www.bing.com/</option>
            <option value="http://www.google.fr/">http://www.google.fr/</option>
            <option value="http://www.yahoo.fr/">http://www.yahoo.fr/</option>
        </select>
    </datalist>
    <button type="submit">envoyer</button>
</form>