
<div class="game-body">
    <section class="page-section-heading mt-5">
        <br><br><br><br><br><!-- Désolée ça doit piquer les yeux !! Mais je n'ai pas trouvé d'autre solution -->
        <h2 style="text-align: center;">À toi de jouer ! C'est l'heure du Du-du-du-du DUEL !!!</h2>
        <br>
        <br>

        <?php
            require "conf/bdd.php";
            $link = new PDO('mysql:dbname=' . $dbname . ';host=' . $host.";port=3306", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //BLACK CARD
            $sql = 'SELECT * FROM card WHERE type = "black" ORDER BY rand() LIMIT 1';
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $dataBlack = $stmt->fetchAll();
            $cardsBlack = $dataBlack;
        //WHITE CARDS
            $sql = 'SELECT * FROM card WHERE type = "white" ORDER BY rand() LIMIT 3';
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $dataWhite = $stmt->fetchAll();
            $cardsWhite = $dataWhite;

            $x = 1;
            if ($x <= 3) {
                $x = $x++;
                //BLACK CARD LOOP
                foreach ($cardsBlack AS $cardBlack) {
                    echo '<p style="text-align: center;">' . $cardBlack["text"] . '</p>';
                }
                echo '<form action="index.php?page=score" method="post" style="text-align: center;">';
                //WHITE CARDS LOOP
                foreach ($cardsWhite AS $cardWhite) {
                    echo '<input name="white" type="radio">' . $cardWhite["text"] . '<br><br>';
                }
                echo '<button class="btn btn-outline-dark" type="submit">Suivant</button></form>';}
            else {
                echo '<form action="index.php?page=score" method="post" style="text-align: center;"><button class="btn btn-outline-dark" type="submit">Voir le score final !</button></form>';
            }
        ?>

        <br>
    </section>
</div>
