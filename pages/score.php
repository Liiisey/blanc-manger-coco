
<div class="score-body">
    <section class="page-section-heading mt-5">
        <br><br><br><br><br><!-- Désolée ça doit piquer les yeux !! Mais je n'ai pas trouvé d'autre solution -->

        <?php
        if (!isset($_POST['cardWhiteId'])) {
            echo "<h3 style='text-align: center;'>Tu n'as pas compris les règles du jeux, tu dois <strong>ABSOLUMENT</strong> choisir une carte blanche...</h3><br>";
            echo '<form action="index.php?page=game" method="post"><button class="btn btn-outline-dark" type="submit" style="display: block; margin-right: auto; margin-left: auto;">Recommencer</button></form><br>';
            return;
        }

        $choice = $_POST['cardWhiteId'];
        if (isset ($_POST['cardWhiteId'])) {
            require "conf/bdd.php";
            $link = new PDO('mysql:dbname=' . $dbname . ';host=' . $host.";port=3306", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $sql = 'SELECT point FROM choice';
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $dataWhite = $stmt->fetchAll();
            $score = $dataWhite;
        }

        echo '<h4 style="text-align: center;">Ton score est de ' . $score["point"] . '</h4>';
?>
        <br>

        <h5 style="text-align: center;">
        <?php
        if ($score < 5) {
            echo "Tu n'es pas du tout sur la bonne voie...";
        }
        elseif ($score < 15) {
            echo "Pas mal du tout, mais tu peux mieux faire !";
        }
        else {
            echo "Bravo !!!!";}
?>      </h5>
        <br>

        <form action="index.php?page=game" method="post">
            <button class="btn btn-outline-dark" type="submit" style="display: block; margin-right: auto; margin-left: auto;">Relancer une nouvelle partie !!?!</button>
        </form>
        <br><br><br><br><br>

    </section>
</div>

