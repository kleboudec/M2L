<div class="container" role="main">
    <p class="bg-success">
        Visualiser les ligues par département
    </p>
    <p>
        <ul  class="list-group">

        <?php
        foreach ($lesDepartements as $unDepartement)
        {
            $code = $unDepartement['codeDep'];
            $nom =  $unDepartement['nomDep'];
            $nbLigue=$unDepartement['nbLigue'];
        ?>
            <li class="list-group-item">
                <a href="index.php?uc=ligues&action=afficherLigueDep&nomDep=<?php echo $nom ?>&codeDep=<?php echo $code ?>"> Les ligues de <?php echo $nom ?> (<?php echo $nbLigue ?>) </a>
            </li>
        <?php
        }
        ?>
        </ul>



    </p>
</div>