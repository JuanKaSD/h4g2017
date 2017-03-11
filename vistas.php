<?php
    class View{
        public static function header($title){
            echo "
            <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset=\"utf-8\">
                        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                        <title>$title</title>

                        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
                        <link href=\"css/datepicker3.css\" rel=\"stylesheet\">
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

        public static function navegation($name,$slogan=""){
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
                                    <svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> ". @$_SESSION['usuario'] ." <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Perfil</a></li>
                                    <li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Cuenta</a></li>
                                    <li><a href=\"#\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Salir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>";

        }

        public static function contentIndex(){
            echo "
            <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
            <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
                <form role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                </form>
                <ul class=\"nav menu\">
                    <li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
                    <li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Widgets</a></li>
                    <li><a href=\"charts.html\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Charts</a></li>
                    <li><a href=\"tables.html\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Tables</a></li>
                    <li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Forms</a></li>
                    <li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Alerts &amp; Panels</a></li>
                    <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Icons</a></li>
                    <li class=\"parent \">
                        <a href=\"#\">
                            <span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown
                        </a>
                        <ul class=\"children collapse\" id=\"sub-item-1\">
                            <li>
                                <a class=\"\" href=\"#\">
                                    <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
                                </a>
                            </li>
                            <li>
                                <a class=\"\" href=\"#\">
                                    <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
                                </a>
                            </li>
                            <li>
                                <a class=\"\" href=\"#\">
                                    <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li role=\"presentation\" class=\"divider\"></li>
                    <li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
                </ul>
                <div class=\"attribution\">Template by <a href=\"http://www.medialoot.com/item/lumino-admin-bootstrap-template/\">Medialoot</a><br/><a href=\"http://www.glyphs.co\" style=\"color: #333;\">Icons by Glyphs</a></div>
            </div><!--/.sidebar-->
            <div class=\"row\">
			<div class=\"col-md-8\">

				<div class=\"panel panel-default chat\">
					<div class=\"panel-heading\" id=\"accordion\"><svg class=\"glyph stroked two-messages\"><use xlink:href=\"#stroked-two-messages\"></use></svg> Chat</div>
					<div class=\"panel-body\">
						<ul>
							<li class=\"left clearfix\">
								<span class=\"chat-img pull-left\">
									<img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
								</span>
								<div class=\"chat-body clearfix\">
									<div class=\"header\">
										<strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
									</p>
								</div>
							</li>
							<li class=\"right clearfix\">
								<span class=\"chat-img pull-right\">
									<img src=\"http://placehold.it/80/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
								</span>
								<div class=\"chat-body clearfix\">
									<div class=\"header\">
										<strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small>
									</div>
									<p>
										Mauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
									</p>
								</div>
							</li>
							<li class=\"left clearfix\">
								<span class=\"chat-img pull-left\">
									<img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
								</span>
								<div class=\"chat-body clearfix\">
									<div class=\"header\">
										<strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
									</div>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies.
									</p>
								</div>
							</li>
						</ul>
					</div>

					<div class=\"panel-footer\">
						<div class=\"input-group\">
							<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" />
							<span class=\"input-group-btn\">
								<button class=\"btn btn-success btn-md\" id=\"btn-chat\">Send</button>
							</span>
						</div>
					</div>
				</div>

			</div><!--/.col-->

			<div class=\"col-md-4\">

				<div class=\"panel panel-blue\">";

        }

        public static function footer(){
            echo "
                                <div class=\"panel-footer\">
                                    <div class=\"input-group\">
                                        <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" />
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div><!--/.col-->
                    </div><!--/.row-->
                </div>	<!--/.main-->

                <script src=\"js/jquery-1.11.1.min.js\"></script>
                <script src=\"js/bootstrap.min.js\"></script>
                <script src=\"js/chart.min.js\"></script>
                <script src=\"js/chart-data.js\"></script>
                <script src=\"js/easypiechart.js\"></script>
                <script src=\"js/easypiechart-data.js\"></script>
                <script src=\"js/bootstrap-datepicker.js\"></script>
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
