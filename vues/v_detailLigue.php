 <div class="container" role="main">

    <p class="bg-success">
        Informations sur la ligue <?php echo $laLigue['nomLigue'] ?>
    </p>

    <ul>

        <div id="list-example" class="list-group">
            <li class="list-group-item">
                Adresse : <?php echo $laLigue['adrLigue']." ".$laLigue['cpLigue']." ".$laLigue['villeLigue'] ?>
            </li>

            <li class="list-group-item">
                Contact : <?php echo $laLigue['numTel']?> <?php echo $laLigue['emailLigue'] ?>
            </li>

            <li class="list-group-item">
                Site web : <?php echo $laLigue['urlLigue'] ?>
            </li>

            <li class="list-group-item">
                Horaire de la Ligue : <?php echo $laLigue['horaireLigue'] ?>
            </li>

            <li class="list-group-item">
                Olympique : <?php echo $laLigue['olympLigue'] ?>
            </li>

            <li class="list-group-item">
                <a href="index.php?uc=ligues&action=membres"> Liste des membres de la ligue</a>
            </li>
        </div>
    </ul>
</div>