<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>

        <link href="/image/comprobantesfiscales_fb_icono.jpg" rel="icon" type="image/jpg"/>

        <title>
            Comprobantes Fiscales | @yield('title')
            {{--titulo q cambia en cada pagina--}}
        </title>
        
        <meta content="Comprobantes Fiscales es un sitio web que ha recopilado los puntos mas importantes y que brinda apoyo para un buen entendimiento y compresion de los nuevos cambios" name="description"/>
        
        <meta content="Comprobantes Fiscales" 
        name="keywords"/>
        
        <meta content="Comprobantes Fiscales" name="author"/>
        
        <meta content="Index, Follow" name="robots"/>
        
        {{--metas para facebook--}}
        <meta content="Comprobantes Fiscales | Nueva Facturacion 2017 " property="og:title"/>
        
        <meta content="website" property="og:type"/>
        
        <meta content="Comprobantes Fiscales es un sitio web que ha recopilado los puntos mas importantes y que brinda apoyo para un buen entendimiento y compresion de los nuevos cambios" 
        property="og:description"/>
        
        <meta content="https://www.aspelsoluciones.com/img/fondo-face.png" property="og:image"/>
        
        <meta content="Comprobantes Fiscales | Sitio de ayuda para un buen entendimiento y compresion de los nuevos cambios de los documentos fiscales" property="og:site_name"/>

        <meta content="https://www.comprobantesfiscales.org" property="og:url"/>
        <link href="https://www.comprobantesfiscales.org" hreflang="es" rel="alternate"/>
        

        {{--estilos de la libreria de ihover--}}
        <link href="/src/ihover.min.css" rel="stylesheet" type="text/css"/>
        <link href="/src/ihover.css" rel="stylesheet"/>
        


        {{-- ......estilos generales de todo el sitio web--}}
    <link rel="stylesheet" type="text/css" href="css/css-facture/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/css-facture/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/css-facture/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css-facture/animate.css">
    <link rel="stylesheet" type="text/css" href="css/css-facture/style.css">

    <link rel="stylesheet" type="text/css" href="css/css-facture/nuevos-estilos.css">




        {{--estilos de los iconos--}}
        <link href="/icomoon/style.css" rel="stylesheet"/>
        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        
        {{--estilos para el tipo de fuente de la pagina--}}
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' 
        rel='stylesheet' type='text/css'>
        
        {{--estilos para las animaciones--}}
        <link href="/css/animate.css" rel="stylesheet"/>
        
        {{--estilos para el menu de navegacion de cada producto--}}
        <link href="/css/component.css" rel="stylesheet"/>
        
        
        {{--añadimos los estilos para los productos--}}
        @stack('add-css')
        
        {{--Google analytics--}}
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-97845785-2', 'auto');
                    ga('send', 'pageview');

        </script>
        {{--SDK para java script para el plugin de Facebook--}}
        <div id="fb-root">
        </div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
    <body data-offset="50" data-spy="scroll" data-target=".navbar" id="page-top">
        <div id="fb-root">
        </div>

        {{--script de facebook--}}
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        @section('header')
            
        @show
        @section('navbar')
            
        @show
        @yield('slider')
        @yield('content')
        @section('footer')
            
        @show
        {{--boton de ir arriba--}}
        
        {{--framework jquery cargado desde el cdn y por si falla lo cargamos de forma local--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
            if (typeof jQuery == 'undefined') 
            {
                document.write(unescape("%3Cscript src='/js/jquery-3.1.1.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>
        {{-- Archivo js de bootstrap cargado de forma local--}}
        <script src="/js/bootstrap.min.js">
        </script>
        {{--script para que se esconda el header--}}
        <script src="/js/header.js">
        </script>
        {{--script para la pagina de hardware--}}
        <script src="/js/wrap-table.js">
        </script>
        <script src="/js/navegacion.js">
        </script>
        {{--scripts para pagina de preguntas frecuentes--}}
        <script src="/js/sppagebuilder.js">
        </script>
        <script src="/js/mootools-core.js">
        </script>
        {{--scripts para la pagina de productos sae--}}
        @stack('add-js')
        
        {{--plugin de jquery para hacer efectos en las paginas--}}
        {{--
        <script src="/js/jquery.easing.min.js" type="text/javascript">
        </script>
        --}}
        <script src="/js/jquery.scrollTo.js">
        </script>
        {{--scripts para los efectos de ir de una seccion a otra--}}
        <script src="/js/seccion2.js">
        </script>

        {{--script para el boton de ir arriba--}}
        <script type="text/javascript">
            $(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
  
    });
        </script>
       
        {{--scripts que funciona con animate.CSS para los efectos de los 
        elemntos cuando se desplaza por una página--}}
        <script src="/js/wow.min.js">
        </script>
        <script src="/js/custom.js">
        </script>
        {{--script del slider--}}
        <script src="/js/animate-slider.js">
        </script>
        <script src="/js/modernizr.js">
        </script>
        <script src="/js/actualizar-carrito.js">
        </script>
      
        {{-- script para desactivar el clik derecho
        <script type="text/javascript">
                document.oncontextmenu = function(){return false;}
        </script>
        --}}

        {{--scripts para la plantilla de sima--}}
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js-sitio/isotope.pkgd.min.js"></script>
<script src="js-sitio/bootstrap.min.js"></script>
<script src="js-sitio/jquery-ui.js"></script>
<script src="js-sitio/appear.js"></script>
<script src="js-sitio/jquery.counterup.min.js"></script>
<script src="js-sitio/waypoints.min.js"></script>
<script src="js-sitio/owl.carousel.min.js"></script>
<script src="js-sitio/showHide.js"></script>
<script src="js-sitio/jquery.nicescroll.min.js"></script>
<script src="js-sitio/jquery.easing.min.js"></script>
<script src="js-sitio/scrolling-nav.js"></script>
<script src="js-sitio/plugins.js"></script>

        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 14,
                scrollwheel: false,
                center: new google.maps.LatLng(41.092586000000000000, -75.592688599999970000)
              };
              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({            
        speed: 1000,  // speed you want the toggle to happen    
        easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
        changeText: 1, // if you dont want the button text to change, set this to 0
        showText: 'View',// the button text to show when a div is closed
        hideText: 'Close' // the button text to show when a div is open
                     
    }); 


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>
/* //scrip para que el scroll se quite y aparezca una barrita azul
  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded 
$(window).load(function(){
    $("body").css("overflow", "visible");        
    var nice=$('html').niceScroll({
    cursorborder:"5",
    cursorcolor:"#00AFF0",
    cursorwidth:"3px",
    boxzoom:true, 
    autohidemode:true
    });

});
*/
</script>

        
    </body>
</html>