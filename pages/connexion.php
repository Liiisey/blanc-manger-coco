
<div class="connexion-body">
    <div class="row justify-content-center">
        <div class="col-6">
            <section class="page-section-heading mt-5">
                    <?php
                    $form = false;
                    if ($form && $resultat) echo"Connexion réussie !";
                    if ($form && !$resultat) echo"La connexion a échouée, veuillez réessayer plus tard.";
                    ?>
                    

                <br>
                <h1>Se connecter</h1>
                <br>
                <form action="form/connexion.php" class="index-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="login">Pseudo</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="login" type="text" name="login" placeholder="coco50" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="email">Adresse email</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="email" type="email" name="email" placeholder="manger.coco@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="password">Mot de passe</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="password" type="password" name="password" placeholder="Rentrez votre mot de passe" required>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-outline-dark" type="submit">Valider</button>
                    <br>
                    <a class="pwd" href="#">Mot de passe oublié ?</a>
                    <br>
                    <br>
                </form>
            </section>
        </div>    
    </div>
</div>

