<div class="container" role="main">
    <p class="bg-success">
        Visualiser les salles
    </p>
    <p>
    <ul  class="list-group">

        <?php
        foreach ($lesSalles as $uneSalle)
        {
            $nom =  $uneSalle['nomSalle'];
            $capacite=$uneSalle['capaciteSalle'];
            ?>
            <li class="list-group-item">
                <a> Salle <?php echo $nom ?> Capacité de la salle <?php echo $capacite ?> personnes</a>
            </li>


            <?php
        }

        ?>

    </ul>
    </p>
</div>