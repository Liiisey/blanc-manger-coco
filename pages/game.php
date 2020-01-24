
<div class="game-body">
    <section class="page-section-heading mt-5">
        <br><br><br><br><!-- Désolée ça doit piquer les yeux !! Mais je n'ai pas trouvé d'autre solution... -->
        <h2 style="text-align: center;">À toi de jouer ! C'est l'heure du Du-du-du-du DUEL !!!</h2>
        <br><br>

        <?php
            require "conf/bdd.php";
            $link = new PDO('mysql:dbname=' . $dbname . ';host=' . $host.";port=3306", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //CARTE NOIRE
            $sql = 'SELECT * FROM card WHERE type = "black" ORDER BY rand() LIMIT 1';
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $dataBlack = $stmt->fetchAll();
            $cardsBlack = $dataBlack;
        //CARTES BLANCHES
            $sql = 'SELECT * FROM choice ORDER BY rand() LIMIT 3';
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $dataWhite = $stmt->fetchAll();
            $choice = $dataWhite;

        //BOUCLE CARTE NOIRE
            foreach ($cardsBlack AS $cardBlack) {
                echo '<p style="text-align: center; font-weight: bold;">' . $cardBlack["text"] . '</p>';
            }
?>
        <form action="index.php?page=score" method="post" style="text-align: center;" id="choice">
        <?php
        //BOUCLE CARTES BLANCHES
            foreach ($choice AS $choices) {
                echo '<input type="radio" name="cardWhiteId[]"><label for="cardWhiteId">' . $choices["text"] . '</label><br><br>';
            }
            echo '<br><button class="btn btn-outline-dark" type="submit">Voir le score !</button>';
?>
        </form>
        <br>

    </section>
</div>
