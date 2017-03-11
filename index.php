<?php
    include_once 'vistas.php';
    include_once 'modelo.php';
    DB::iniDb();
    View::header("pagina principal");
    View::navegation("capsulas for good"," Creando ilusiones","pepe social");
    View::menuIndex();
    if(isset($_GET['camp'])){
        switch ($_GET['camp']) {
            case 1: //candidatos
                View::contentIndexCand();
                break;
            case 2: //valorar
                View::contentIndexVal();
                break;
            case 3: //otogar habilidad
                View::contentIndexOto();
                break;
            default:
                View::contentIndex();
                break;
        }
    }else{
        View::contentIndex();
    }


    View::footer();
