<?php
    class View{
        public static function header($title){
            echo "
            <!DOCTYPE html>
                <html lang=\"es\">
                    <head>
                        <meta charset=\"utf-8\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                        <title>$title</title>

                        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
                        <link href=\"css/datepicker3.css\" rel=\"stylesheet\">
                        <link href=\"css/bootstrap-table.css\" rel=\"stylesheet\">
                        <link href=\"css/styles.css\" rel=\"stylesheet\">

                        <!--Icons-->
                        <script src=\"js/lumino.glyphs.js\"></script>

                        <!--[if lt IE 9]>
                        <script src=\"js/html5shiv.js\"></script>
                        <script src=\"js/respond.min.js\"></script>
                        <![endif]-->

                    </head>

                    <body>";
        }

        public static function navegation($name,$slogan="",$usuario=""){
            echo "
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><span>$name</span>$slogan</a>
                        <ul class=\"user-menu\">
                            <li class=\"dropdown pull-right\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>$usuario<span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"index.php?camp=1\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> pepe social</a></li>
                                    <li><a href=\"indexPaco.php?camp=1\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>paco acogedor</a></li>
                                    <li><a href=\"indexJuan.php?camp=1\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>juan empresario</a></li>
                                    <li><a href=\"indexJose.php?camp=1\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> jose solidario</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>";

        }


        public static function menuIndex(){
            echo "
            <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
                <ul class=\"nav menu\">
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li>Nuevos Candidatos</li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li><a href=\"index.php?camp=1\"><svg class=\"glyph stroked clipboard with paper\"><use xlink:href=\"#stroked-clipboard-with-paper\"></use></svg> Candidatos</a></li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li>Mis Candidatos</li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li><a href=\"index.php?camp=2\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Valorar</a></li>
                    <li><a href=\"index.php?camp=3\"><svg class=\"glyph stroked notepad\"><use xlink:href=\"#stroked-notepad\"></use></svg> Otorgar Habilidad</a></li>
                </ul>
            </div>";
        }

        public static function contentIndexCand(){
            echo "
            <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Candidatos</div>
                            <div class=\"panel-body\">
                                <table data-toggle=\"table\" data-url=\"tables/data2.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\" >ID</th>
                                        <th data-field=\"nombre\" data-sortable=\"true\">Nombre</th>
                                        <th data-field=\"apellido\"  data-sortable=\"true\">Apellidos</th>
                                        <th data-field=\"habilidad\" data-sortable=\"true\">Habilidades</th>
                                        <th data-field=\"state\" data-checkbox=\"true\">seleccionar</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>	<!--/.main-->";
        }

        public static function contentIndexVal(){
            echo "
            <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Candidatos</div>
                            <div class=\"panel-body\">
                                <table data-toggle=\"table\" data-url=\"tables/data2.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\" >ID</th>
                                        <th data-field=\"nombre\" data-sortable=\"true\">Nombre</th>
                                        <th data-field=\"apellido\"  data-sortable=\"true\">Apellidos</th>
                                        <th data-field=\"tsrealizado\" data-sortable=\"true\">T.S. Realizado</th>
                                        <th data-field=\"valoracion\" data-sortable=\"true\">Valoracion</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>	<!--/.main-->";
        }

        public static function contentIndexOto(){
            echo "
            <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Candidatos</div>
                            <div class=\"panel-body\">
                                <table data-toggle=\"table\" data-url=\"tables/data2.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\" >ID</th>
                                        <th data-field=\"nombre\" data-sortable=\"true\">Nombre</th>
                                        <th data-field=\"apellido\"  data-sortable=\"true\">Apellidos</th>
                                        <th data-field=\"habilidad\" data-sortable=\"true\">Habilidades</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>	<!--/.main-->";
        }

        public static function contentIndex(){
            echo "
            <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1>Hola!!...</h1>
                    </div>
                </div><!--/.row-->
            </div>	<!--/.main-->";
        }

        public static function menuPaco(){
            echo "
            <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
                <ul class=\"nav menu\">
                    <li><a href=\"indexPaco.php?camp=1\"><svg class=\"glyph stroked clipboard with paper\"><use xlink:href=\"#stroked-clipboard-with-paper\"></use></svg> Registrar Domicilio</a></li>
                </ul>
            </div>";
        }

        public static function contentPaco(){
            echo "
            <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">Candidatos</div>
                            <div class=\"panel-body\">
                                <table data-toggle=\"table\" data-url=\"tables/data1.json\"  data-show-refresh=\"true\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"name\" data-sort-order=\"desc\">
                                    <thead>
                                    <tr>
                                        <th data-field=\"id\" data-sortable=\"true\" >id</th>
                                        <th data-field=\"pais\" data-sortable=\"true\">pais</th>
                                        <th data-field=\"provincia\" data-sortable=\"true\">provincia</th>
                                        <th data-field=\"direccion\" data-sortable=\"true\">direccion</th>
                                        <th data-field=\"numero\" data-sortable=\"true\">numero</th>
                                        <th data-field=\"codpostal\"  data-sortable=\"true\">codpostal</th>
                                        <th data-field=\"habitaciones\" data-sortable=\"true\">habitaciones</th>

                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>	<!--/.main-->";
        }
        public static function formLogin(){

        }

        public static function footer(){
            echo "


                <script src=\"js/jquery-1.11.1.min.js\"></script>
                <script src=\"js/bootstrap.min.js\"></script>
                <script src=\"js/chart.min.js\"></script>
                <script src=\"js/chart-data.js\"></script>
                <script src=\"js/easypiechart.js\"></script>
                <script src=\"js/easypiechart-data.js\"></script>
                <script src=\"js/bootstrap-datepicker.js\"></script>
                <script src=\"js/bootstrap-table.js\"></script>
                <script>
                    $('#calendar').datepicker({
                    });

                    !function ($) {
                        $(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
                            $(this).find('em:first').toggleClass(\"glyphicon-minus\");
                        });
                        $(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
                    }(window.jQuery);

                    $(window).on('resize', function () {
                      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
                    })
                    $(window).on('resize', function () {
                      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
                    })
                </script>
            </body>

            </html>";
        }
    }
