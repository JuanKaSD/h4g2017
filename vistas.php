<?php
    class View{
        public static function header($title){
            echo "<html>
                    <head>
                        <title>$title</title>
                    </head>
                    <body>";
        }

        public static function navegation(){
            echo "<nav>
                    <ul>
                        <li>inicio</li>
                        <li>algo</li>
                    </ul>
                  </nav>";

        }

        public static function contentIndex(){
            echo "<content>
                    <p>hola mundo cruel y despiadado</p>
                    </content>";

        }

        public static function footer(){
            echo "<footer>
                    <p>creado by <a href='http://www.google.es'> ..::jhonts::..</a></p>
                </footer>";
        }
    }
