<?php
    include_once 'vistas.php';
    include_once 'modelo.php';
    DB::iniDb();
    View::header("pagina principal");
    View::navegation("capsulas for good","perdiendo el tiempo...");
    View::contentIndex();
    View::footer();
