<!DOCTYPE HTML>
<html>
    <head><link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <title>Agua Purificada Prana</title>
        <meta name="description" content="agua purificada,bidones de agua, PRANA, agua pura y natural abastece el área metropolitana con maquinas de frío calor y botellones de 20 litros.">
        <meta name="robots" content="agua purificada,bidones de agua, PRANA, agua pura y natural abastece el área metropolitana con maquinas de frío calor y botellones de 20 litros." />
        <meta name="googlebot" content="agua purificada,bidones de agua, PRANA, agua pura y natural abastece el área metropolitana con maquinas de frío calor y botellones de 20 litros." />
        <meta name="author" content="Francisco Vergara Henriquez" >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/personal.css" rel="stylesheet" media="screen">

        <link rel="stylesheet" href="css/alertify.core.css" />
	<link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS" />
	<meta name="viewport" content="width=device-width">

        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/alertify.min.js"></script>
        
        <script>
    
            function getUrlVars()
            {
                var vars = [], hash;
                var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                for(var i = 0; i < hashes.length; i++)
                {
                    hash = hashes[i].split('=');
                    vars.push(hash[0]);
                    vars[hash[0]] = hash[1];
                }
                return vars;
            }
            $( document ).ready(function() {
                var first = getUrlVars()["op"]; 
                if(first=='ok'){
                    alertify.success("Gracias por enviar tú solicitud, responderemos en las próximas horas.");
                }
                else if(first=='nok'){
                    alertify.error("Disculpe, ha ocurrido un error. Por favor vuelta a intentarlo.");
                }
                
            });
            
            
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-42631173-1', 'aguaprana.cl');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');

        </script>
        <!--[if IE 7]>
                <link href="css/font-awesome-ie7.min.css" rel="stylesheet">
        <![endif]-->

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>

    </head>

    <body>
        <div id="wrapper">
            <div id="sidebar">
                <a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <!-- <div id="logo"> <a href="/"><img src="img/logo.svg" alt="logo" /></a> </div> -->
                <nav id="nav" class="navigation" role="navigation">
                    <ul class="unstyled">
                        <li class="active" data-section="1"><i class="icon-home"></i> <span>Inicio</span></li>
                        <li data-section="2" class=""><i class="icon-leaf"></i> <span>Servicios</span></li>
                        <li data-section="3" class=""><i class="icon-tint"></i> <span>Productos</span></li>
                        <li data-section="4" class=""><i class="icon-map-marker"></i> <span>Ubicación</span></li>
                        <li data-section="5" class="last"><i class="icon-envelope"></i> <span>Contacto</span></li>
                        <li class="last"><i class="icon-thumbs-up" onclick="window.open('https://www.facebook.com/AguaPranaLtda')"></i> <span>Facebook</span></li>
                    </ul>
                </nav><!-- /nav -->
            </div><!-- /sidebar -->

            <div id="container">

                <section class="section" id="section1" data-section="1">
                    <img src="img/logo.png" alt="Your Name" class="logo">
                    <div class="container-fluid">	
                        <div class="row-fluid">

                            <!--                            <div class="alt-image img-circle thumb">
                                                            <img src="img/logo.png" alt="Your Name" class="img-circle">
                                                        </div>-->
                            <div class="span6 intro">
                                <hgroup>
                                    <h1>Bienvenido a prana!</h1>
                                    <h3>Agua pura y natural</h3>
                                </hgroup>
                                <button class="btn-inverse" data-section="2">
                                    SABER <span>MAS</span>
                                    <i class="icon-circle-arrow-down"></i>
                                </button>
                            </div><!-- /span6 -->

                        </div><!-- /row-fluid -->
                    </div><!-- /container-fluid -->	
                </section><!-- /section -->

                <section class="section" id="section2" data-section="2">
                    <div class="container-fluid">
                        <div class="row-fluid title">
                            <div class="span4">
                                <h2>Servicios</h2>
                            </div><!-- /span3 -->
                            <div class="span8 hidden-phone">	
                                <hr>
                            </div><!-- /span9 -->
                        </div><!-- /row-fluid -->

                        <div class="row-fluid desc">
                            <div class="span8">
                                <p>Considerando que el recurso agua, es lo más importante en el desarrollo de la vida humana y pensando que hoy en día las personas buscan alternativas sanas y en equilibrio con la naturaleza.</p>
                                <p>PRANA, agua pura y natural abastece el área metropolitana con maquinas de frío calor y botellones de 20 litros. Con una capacidad de respuesta de máximo 24 horas. Además se envasa en botellas de 500cc y 1500cc con logo institucional de nuestros clientes, entregándoles a éstos una herramienta de publicidad.</p>
                            </div><!-- /span8 -->
                        </div><!-- /row-fluid -->

                        <div class="row-fluid content hidden-tablet" style="margin-top: 20px;">
                            <div class="span12 expand">
                                <h4>Entre otros</h4>
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="servicios_img">
                                            <img class="servicios_img" src="img/despacho.jpg" alt="despacho prana">
                                        </div>                                        
                                        <h4 class="hidden-phone">Despacho a toda la región metropolitana</h4>
                                        <h6>Por el momento el despacho a domicilios particulares, se realiza solo si es sobre 10 Bidones de agua.</h6>

                                    </div><!-- /span4 -->


                                    <div class="span4">
                                        <!-- CHART N 2 -->
                                        <div class="servicios_img">
                                            <img class="servicios_img" src="img/oficina.jpg" alt="oficina prana">
                                        </div>
                                        <h4 class="hidden-phone">Convenio con empresas y particuares</h4>
                                        <h6>Pedidos programados para empresas y particulares.</h6>
                                        <!-- END CHART N 2 -->
                                    </div><!-- /span4 -->


                                    <div class="span4">
                                        <!-- CHART N 3 -->
                                        <div class="servicios_img">
                                            <img class="servicios_img" src="img/tercera.jpg" alt="tercera edad">
                                        </div>
                                        <h4 class="hidden-phone">Personalización de productos para nuestros clientes</h4>
                                        <h6>Se realizan botellas de 500cc personalizadas con las marcas de nuestros clientes.</h6>

                                        <!-- END CHART N 3 -->
                                    </div><!-- /span4 -->

                                </div><!-- /row-fluid -->	
                            </div><!-- /span12 -->
                        </div><!-- /row-fluid -->
                    </div><!-- /container -->
                </section><!-- /section -->	

                <section class="section" id="section3" data-section="3">
                    <div class="container-fluid">
                        <div class="row-fluid title">
                            <div class="span5">
                                <h2>Productos</h2>
                            </div><!-- /span4 -->
                            <div class="span6 hidden-phone alt">	
                                <hr style="border-color:#16A085">
                            </div><!-- /span8 -->
                        </div>
                        <div class="row-fluid desc">
                            <div class="span8">
                                <!--                                <p>Estos son algunos de nuestros productos.</p>-->
                            </div><!-- /span8 -->
                        </div><!-- /row -->

                        <div class="row-fluid content slide">
                            <div class="span4 backWhite">
                                <img src="img/botellones.jpg" alt="Project 01" class="centerImg">
                                <h4 class="hidden-phone">Botellones con agua purificada.</h4>
                                <h6>Bidones RETORNABLES 20 Litros (Despacho fuera de Melipilla minimo 10 Bidones.)</h4>
                            </div><!-- /span4 -->
                            <div class="span4 backWhite">
                                <div class="centerImg">
                                    <img src="img/dispensador2.jpg" alt="Project 02" class="centerImg">
                                    <h4 class="hidden-phone">Máquina dispensadora de agua Frío-Calor.</h4>
                                    <h6>Arriendo de maquina o venta a empresas y particulares</h6>
                                </div>
                            </div><!-- /span4 -->
                            <div class="span4 backWhite">
                                <img src="img/dispensador1.jpg" alt="Project 03" class="centerImg">
                                <h4 class="hidden-phone">Dispensador de agua de mesa.</h4>
                                <h6>Dispensador de agua a temperatura ambiente.</h6>
                            </div><!-- /span4 -->
                        </div><!-- /row-fluid -->	


                    </div><!-- /container -->
                </section><!-- /section -->


                <section class="section" id="section4" data-section="4">
                    <div class="container-fluid">
                        <div class="row-fluid title">
                            <div class="span5">
                                <h2>Ubicación</h2>
                            </div><!-- /span4 -->
                            <div class="span7 hidden-phone">	
                                <hr>
                            </div><!-- /span8 -->
                        </div><!-- /row-fluid -->
                        <div class="row-fluid desc">
                            <div class="span8">
                                <p>A fines del año 2004 nace en Melipilla, "PRANA AGUA PURA Y NATURAL", con el objetivo de producir agua purificada y libre de sodio, para satisfacer las necesidades del mundo moderno.</p>
                            </div><!-- /span8 -->
                        </div><!-- /row-fluid -->
                        <div class="row-fluid ">
                            <div class="span4">
                                <div class="ubicacion_img">
                                    <img class="ubicacion_img" src="img/mujer.jpg" alt="mujer prana">
                                </div>
                            </div><!-- /span4 -->

                            <div class="span8" >
                                <iframe style="width: 100%; height: 290px;" scrolling="no" frameborder="0" src="http://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=google+maps+Arza+%23560,+Melipilla,+Regi%C3%B3n+Metropolitana&amp;aq=&amp;sll=-33.682643,-71.214506&amp;sspn=0.008285,0.01929&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=Arza,+560,+Melipilla,+Regi%C3%B3n+Metropolitana&amp;t=m&amp;z=16&amp;ll=-33.681443,-71.214506&amp;output=embed" marginwidth="0" marginheight="0"></iframe>

                            </div><!-- /span8 -->



                        </div><!-- /row-fluid -->
                    </div><!-- /container -->
                </section><!-- /section -->


                <section class="section" id="section5" data-section="5">
                    <div class="container-fluid">
                        <div class="row-fluid title">
                            <div class="span6">
                                <h2>Contactanos</h2>
                            </div><!-- /span4 -->
                            <div class="span6 hidden-phone alt">	
                                <hr>
                            </div><!-- /span8 -->
                        </div><!-- /row-fluid -->
                        <div class="row-fluid content">
                            <div class="span4">
                                <h4 class="intro">Solicitar Cotización</h4>
                                <p>Estaremos encantados de resolver tus dudas con respecto a nuestros servicios.
                                    Si necesitas cotizaciones no dudes en llamar o enviarnos un mensaje. Nosotros nos comunicaremos contigo!</p>
                                <div class="row-fluid alt">
                                    <h5>Correo:</h5>
                                    <span>ventas@aguaprana.cl</span>
                                </div><!-- /row -->
                                <div class="row-fluid alt">
                                    <h5>Telefono:</h5>
                                    <span>(+56) 2 283 16 842</span>
                                </div><!-- /row -->
                                <!--                                <div class="row-fluid alt">
                                                                    <h5>Twitter:</h5>
                                                                    <span><a href="http://www.twitter.com/basicoh_" rel="external">@Basicoh_</a></span>
                                                                </div> /row -->
                            </div><!-- /span4 -->

                            <div class="span8">

                                <div class="row-fluid">
                                    <div class="span12">
                                        
                                    </div><!-- /span12 -->
                                </div><!-- /row-fluid -->

<!--                                <form method="POST" action="mail/enviar_correo.php">-->
                                <form method="POST" action="http://www.isatix.org/tarsius/index.php/main/solicitudcotizacion">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label for="name" class="control-label">Nombre</label>
                                                <div class="controls">
                                                    <input class="span12" type="text" name="name" id="name" >
                                                </div><!-- /controls -->
                                            </div><!-- /control-group -->
                                        </div><!-- /span6 -->
                                        <div class="span6">
                                            <div class="control-group">
                                                <label for="email" class="control-label">Correo:</label>
                                                <div class="controls">
                                                    <input class="span12" type="email" name="email" id="email">
                                                </div><!-- /controls -->
                                            </div><!-- /control-group -->
                                        </div><!-- /span6 -->
                                    </div><!-- /row-fluid -->

                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label for="phone" class="control-label">Numero de telefono:</label>
                                                <div class="controls">
                                                    <input class="span12" type="tel" name="phone" id="phone">  
                                                </div><!-- /controls -->
                                            </div><!-- /control-group -->
                                        </div><!-- /span6 -->
                                        
                                    </div><!-- /row-fluid -->

                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div class="control-group">
                                                <label for="message" class="control-label">Tu mensaje:</label>
                                                <div class="controls">
                                                    <textarea class="span12" type="text" name="message" id="message" rows="4"></textarea>
                                                </div><!-- /controls -->
                                            </div><!-- /control-group -->
                                        </div><!-- /span12 -->
                                    </div><!-- /row-fluid -->

                                    <input type="hidden" name="save" value="contact">  
                                    <button type="submit" class="btn-inverse pull-right">
                                        Enviar <span>Mensaje</span>
                                        <i class="icon-circle-arrow-right"></i>
                                    </button>
                                </form><!-- /form -->
                            </div><!-- /span8 -->	

                            <div id="footer">
                                <div class="row-fluid">
                                    <div class="span12">
                                    </div><!-- /span12 -->
                                </div><!-- /row-fluid -->	
                            </div><!-- /footer -->
                        </div><!-- /row-fluid -->	
                    </div><!-- /container-fluid -->

            </div><!-- /container -->	
        </div><!-- /wrapper -->		

        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.knob.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/alertify.js"></script>
    </body>
</html>
