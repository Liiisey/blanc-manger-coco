
<div class="score-body">
    <section class="page-section-heading mt-5">
        <br><br><br><br><br><!-- Désolée ça doit piquer les yeux !! Mais je n'ai pas trouvé d'autre solution -->

        <?php
            $score = 0;
            echo '<h4 style="text-align: center;">Ton score est de ' . $score . ' !!</h4>';
        ?>

        <br>
        <form action="index.php?page=game" method="post">
            <button class="btn btn-outline-dark" type="submit" style="display: block; margin-right: auto; margin-left: auto;">Relancer une nouvelle partie !!?!</button>
        </form>
        <br><br><br><br><br>
    </section>
</div>

