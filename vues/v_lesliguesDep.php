<div class="container" role="main">

    <p class="bg-success">
        Ligues du département de <?php echo $nomDep ?>
    </p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Adresse du site web</th>
                <th scope="col">Détails</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach ($lesLigues as $uneLigue)
            {
                $id = $uneLigue['idLigue'];
                $nom = $uneLigue['nomLigue'];
                $url = $uneLigue['urlLigue'];
                $adresseRue = $uneLigue['adrLigue'];
                $cp = $uneLigue['cpLigue'];
                $ville = $uneLigue['villeLigue'];
                $tel = $uneLigue['telLigue'];
                $emailContact = $uneLigue['emailLigue'];
                $olympique = $uneLigue['olympLigue'];
        ?>
                <tr>
                    <th scope="row"><?php echo $nom ?></th>

                    <td><?php echo $url ?></td>

                    <td><a href="index.php?uc=ligues&action=detailLigue&idLigue=<?php echo $id ?>"><img src="./public/image/detail.png"> </a></td>
                </tr>
            <?php
            }
            ?>
      </tbody>

    </table>

</div>