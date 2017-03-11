<?php
    include_once 'vistas.php';
    include_once 'modelo.php';
    DB::iniDb();
    View::header("pagina principal");
    View::navegation("capsulas for good"," Creando ilusiones","paco acogedor");
    View::menuPaco();
    View::contentPaco();
    View::footer();
