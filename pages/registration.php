
<div class="registration-body">
    <div class="row justify-content-center">
        <div class="col-6">
            <section class="page-section-heading mt-5">
                <?php
                $form = false;
                if (!empty($_POST["login"]) && !empty($_POST["email"])) {
                    $form = true;
                    $sql = "INSERT INTO user (login, email, password) VALUES(:login, :email, :pwd)";
                    $statement = $dbh->prepare($sql);
                    $login = $_POST["login"];
                    $statement->bindParam(":login",$login);
                    $email = $_POST["email"];
                    $statement->bindParam(":email", $email);
                    $pwd = $_POST["pwd"];
                    $statement->bindParam(":pwd",password_hash($pwd,PASSWORD_BCRYPT));
                    $resultat = $statement->execute();
                }

                if($form && $resultat) echo "Inscription réussie !";
                if($form && !$resultat) echo "L'inscription a échouée, veuillez réessayer plus tard.";
                ?>

                <br>
                <h1>S'inscrire</h1>
                <br>
                <form action="index.php?page=registration" class="index-form" method="post">
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
                    <input class="btn btn-outline-dark" type="submit">
                    <br>
                    <br>
            </section>
        </div>
    </div>
</div>
