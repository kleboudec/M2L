<div class="container">

    <div class="alert alert-warning" role="alert">
        L'accès à l'intranet nécessite une identification.
    </div>


    <form method="GET" action="index.php">

        <div class="form-group">

            <label for="nom">Login *</label>
            <input id="login" class="form-control" type="text" name="login"  size="30" maxlength="45" placeholder="Enter email">
        </div>
        <div class="form-group">
				<label for="mdp">Mot de passe *</label>
                <input id="mdp"  class="form-control" type="password"  name="mdp" size="30" maxlength="45">
        </div>

        <input type="hidden" value="connexion" name="uc">
        <input type="hidden" value="valideConnexion" name="action">

        <input type="submit" value="Valider" name="valider">

        <input type="reset" value="Annuler" name="annuler">

    </form>

</div>
