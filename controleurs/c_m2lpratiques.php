<?php

if(!isset($_REQUEST['action'])){

    $_REQUEST['action'] = 'presentation';
}

$action = $_REQUEST['action'];

switch($action){

    case 'presentation':{

        include("vues/v_presentation.php");
        break;
    }

    case 'locaux':{
        $lesSalles = $pdo->getLesSalles();

        include("vues/v_locaux.php");
        break;
    }

    case 'telecommunications':{

        include("vues/v_telecommunications.php");
        break;
    }

    case'modalites':{

        include("vues/v_modalites.php");
        break;
    }

    case 'ServicesInformatiques':{

        include("vues/v_ServicesInformatiques.php");
        break;
    }

    case 'communications':{

        include("vues/v_communications.php");
        break;
    }

}
?>