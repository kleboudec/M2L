<div class="container" role="main">

    <p class="bg-success">
        Ligues du département de <?php echo $nomDep ?>
    </p>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($lesMembres as $unMembre)
        {
            $nom = $unMembre['nomMembre'];
            $prenom = $unMembre['prenomMembre'];
            $tel = $unMembre['telMembre'];
            ?>
            <tr>
                <td><?php echo $nom ?></td>

                <td><?php echo $prenom ?></td>

                <td><?php echo $tel ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>

    </table>

</div>