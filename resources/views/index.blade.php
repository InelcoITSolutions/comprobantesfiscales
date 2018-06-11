@extends('templates.main')

@section('title','Inicio')

@section('slider')
    
@stop
@section('content')
<body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img src="/image/comprobantesfiscales-org.png" width="200px" 
              alt="logo-aspelsoluciones" style="margin: 10px">
              <!--
              <a class="navbar-brand" href="#">Aspel<span class="logo-dec"> Soluciones</span></a>
              -->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#main-header">Inicio</a>
                </li>
                <li class=""><a href="#feature">Cambios</a>
                </li>
                <li class=""><a href="#service">Formas de pago</a>
                </li>
                <li class=""><a href="#portfolio">Catálogos</a>
                </li>
                <li class=""><a href="#validacion">ValidaciÓn RFC</a>
                </li>
                <li class=""><a href="#blog">Soluciones</a>
                </li>
                <li class=""><a href="https://survey.zohopublic.com/zs/QfCubn" target="_blank">Contáctanos</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s">
              <h1 class="bnr-title">Nueva versión</h1>

              <h2 class="bnr-sub-title">Factura electrónica V3.3</h2>

              <p class="bnr-para">A través de la publicación del Anexo 20 de la Resolución Miscelánea Fiscal publicado el 10
              <br> de enero de 2017, se oficializan los cambios proyectados por el Servicio de Administración 
              <br>
              Tributaria (SAT) al Comprobante Fiscal Digital por Internet (CFDI).
              </p>
              <div class="brn-btn">
                <a href="https://survey.zohopublic.com/zs/QfCubn" class="btn btn-download" target="_blank">Contactanos</a>
                <a href="#portfolio" class="btn btn-more">Nuevos catálogos</a>
              </div>
              <div class="overlay-detail">
                <a href="#feature"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!-- cambios principales-->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
          
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15"> Cambios principales</h2>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
            <div class="service-item">
                <h3>
                <span>
                <i class="fa fa-credit-card" aria-hidden="true"></i>
              </span>
              </h3>
            </div>
              <h3 class="pad-bt15">Formas de pago</h3>
              <p class="text-center">En la nueva versión se invierten los datos
              que deben ir en 
              “Método de pago” y en “Forma de pago”, como se señala a continuación.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="service-item">
                <h3>
                <span>
                <i class="fa fa-book" aria-hidden="true"></i>
              </span>
              </h3>
            </div>
              <h3 class="pad-bt15">Nuevos catálogos</h3>
              <p class="text-center">Se incorporan 17 nuevos catálogos:
              <br>Algunos son 
              obligatorios y otros de uso condicional.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="service-item">
                <h3>
                <span>
                <i class="fa fa-check-circle" aria-hidden="true"></i>
              </span>
              </h3>
            </div>
              <h3 class="pad-bt15">Validación del RFC</h3>
              <p class="text-center">Se validará que todos los RFC receptores se encuentren registrados ante el SAT a 
              partir de un listado que ofrece la Autoridad.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="service-item">
                <h3>
                <span>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
              </span>
              </h3>
            </div>
              <h3 class="pad-bt15">Zonas Horarias</h3>
              <p>En las nuevas Facturas Electrónicas se hará uso de zonas 
              horarias las cuales estarán basadas en el Código Postal.</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!---->

    <!--metodos y formas de pago-->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
      
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Métodos y Formas de Pago</h2>

            <p class="sub-title pad-bt15">En la nueva versión 
              se invierten los datos que deben ir en 
              “Método de pago” 
            <br>y en “Forma de pago”, como se señala a continuación.</p>
            <hr class="bottom-line">
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>M</span>étodo de pago</h3>
              <p>
              <ul class="vinetas">
                <li>
                <i class="fa fa-check-circle" aria-hidden="true">
                </i>
                Efectivo
                </li>
                <li>
                <i class="fa fa-check-circle" aria-hidden="true">
                </i>
                Cheque
                </li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                Tarjeta de crédito</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                Tarjeta de débito</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                 depósito bancario</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                etc.</li>
              </ul>
             </p>
              <span style="color: #06486A">
              <i class="fa fa-arrow-left  fa aria-hidden="true">
              </i>Antes de 1/07/2017
              </span>
            </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>F</span>orma de pago</h3>

              <p>Se utiliza para expresar:
              <br>
              <br>
              <i class="fa fa-check-circle" aria-hidden="true">
                </i> Una sola exhibición. 
              <br>
              <i class="fa fa-check-circle" aria-hidden="true">
                </i> Pago en parcialidades.
              </p>
              <br>
              <br>

              <span style="color: #06486A">
              <i class="fa fa-arrow-left  fa aria-hidden="true">
              </i>Antes de 1/07/2017
              </span>
             
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>M</span>étodo de pago</h3>

              <p>Se utiliza para expresar:
              <br>
              <br>
              <i class="fa fa-check-circle" aria-hidden="true">
                </i> Una sola exhibición. 
              <br>
              <i class="fa fa-check-circle" aria-hidden="true">
                </i> Pago en parcialidades.
              </p>
              <br>
              <br>
              <span style="color: #005DAB">
              <i class="fa fa-arrow-right " aria-hidden="true">
              </i>
                Despues de 1 de Julio 2017
              </span>

              
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>F</span>orma de pago</h3>

              <p> <ul class="vinetas">
                <li>
                <i class="fa fa-check-circle" aria-hidden="true">
                </i>
                Efectivo
                </li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                Cheque</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                Tarjeta de crédito</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                Tarjeta de débito</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                depósito bancario</li>
                <li><i class="fa fa-check-circle" aria-hidden="true"></i>
                etc.</li>
              </ul>
             </p>
              <span style="color: #005DAB">
              <i class="fa fa-arrow-right" aria-hidden="true">
              </i>
                Despues de 1 de Julio 2017
              </span>
              
            </div>
          </div>

        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!--nuevos catalogos-->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
     
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Nuevos catálogos</h2>

            <p class="sub-title pad-bt15">En la nueva versión 
            se integran 17 cátalogos
            </p>
            <hr class="bottom-line">
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-ship" aria-hidden="true"></i>
              </span>Aduanas</h3>
              <p>En importación será la clave de la ADUANA/SECCION, por la que entra la mercancía a territorio nacional, conforme al apéndice 1 del presente Anexo 20.</p>
              <br>
               <!--
               <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
              
            </div>
          </div>


          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-globe" aria-hidden="true"></i>
              </span>País</h3>

              <p>claves del país de residencia para efectos fiscales del receptor del comprobante.</p>
              <br>
              <br>
              <br>
             <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
             -->
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-envelope" aria-hidden="true"></i>
            </span>Código P.</h3>

              <p>Con este nuevo catálogo el sat podra tener datos mas 
              exactos y tener mayor seguridad del momento que se genero la factura.</p>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
              
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-money" aria-hidden="true"></i>
              </span>Moneda</h3>

              <p>Se debe registrar la clave de la moneda utilizada para expresar los montos,   cuando   se   usa   moneda   nacional   se   registra MXN, conforme con la especificación ISO 4217.</p>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

          <!-- estan quedando en el segundo renglon-->

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-hashtag" aria-hidden="true"></i>

              </span>Clave prod</h3>

              <p>Es requerido y deben utilizar las claves del catálogo de productos y servicios, cuando los conceptos que registren por sus actividades correspondan con dichos conceptos.</p>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>Kl
              </span>Clave unidad</h3>

              <p>Atributo requerido para precisar la clave de unidad de medida estandarizada aplicable para la cantidad expresada en el concepto.</p>
              <br>
           
              
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-credit-card" aria-hidden="true"></i>
              </span>Forma pago</h3>

              <p>paraesta versión seran leyendas tales como. cheque, tarjeta de credito o debito, deposito en cuenta, etc.</p>
              <br>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-calculator" aria-hidden="true"></i>
              </span>Impuesto</h3>

              <p>Se debe registrar la clave del tipo de impuesto trasladado aplicable 
                  a  cada  concepto,  las  cuales  se  encuentran  incluidas en  el  catálogo c_Impuesto publicado en el Portal del SAT</p>
                  <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

          </div><!-- reglon-->

          <div class="row">
            
          <!-- tercer renglon para mostrar los catalogos-->
           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-area-chart" aria-hidden="true"></i>

              </span>Tasa o cuota</h3>

              <p>valor de la tasa o cuota del impuesto que se traslada en el concepto.</p>
              <br>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo
               </a>
               -->
            </div>
          </div>

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-file-text" aria-hidden="true"></i>

              </span>Tipo Factor</h3>

              <p>Este catálogo se utilizará para determinar el tipo de factor que en conjunto con la tasa o cuota se le aplica a los importes reflejados en los CFDI´s.</p>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-building" aria-hidden="true"></i>

              </span>Tipo relacion</h3>
              <p>claves de la relación que existe entre el comprobante que se está generando y el o los CFDI’s previos.</p>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-file-text-o" aria-hidden="true"></i>

              </span>Tipo Comprobante</h3>

              <p>claves que expresan el efecto del comprobante fiscal para el contribuyente emisor.</p>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>
           </div><!-- tercer renglon-->
          <!-- cuarto renglon para mostrar los catalogos-->
           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-laptop" aria-hidden="true"></i>
              </span>Uso CFDI</h3>

              <p>claves del uso que se le dará a la factura el receptor del comprobante.</p>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>Pedimento aduanal</h3>

              <p>------------------</p>
              <br>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-file-o" aria-hidden="true"></i>



              </span>Método pago</h3>

              <p>claves que precisan el método de pago que aplica al CFDI.</p>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->

            </div>
          </div>

           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-registered" aria-hidden="true"></i>

              </span>Patente Aduanal</h3>

              <p>------------------</p>
              <br>
              <br>
              <!--
              <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i>

              </span>Regimen fiscal</h3>

              <p>Se  debe  especificar  la  clave  del  régimen  fiscal  del contribuyente emisor bajo el cual se está emitiendo el comprobante.</p>
              <!--
             <a class="boton_personalizado" 
               href="">
               Ver ejemplo</a>
               -->
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3>
              <span style="color: #87C655"><i class="fa fa-download" aria-hidden="true"></i>
              </span>
              </h3>
              <p>puedes descargar los catalogos con un solo click</p>
              <br>
              <br>

               <a class="boton_personalizado" 
               href="descargas/CFDI.xls" 
               download="Catalogos SAT 2017">
               Descargar</a>
              
            </div>
          </div>
          <!-- video de la facturacion-->
          <div class="container">
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="contenedor">
                      <video width="410" height="230" controls style="margin-top:15px!important;">
                          <source src="/image/video-cfdi.mp4" type="video/mp4"> Tu navegador no soporta el nuevo formato de video para HTML5.
                      </video>
                  </div>
              </div>
          </div>



        
      </div>
    </section>
    <!---->
<section class="secciones-noi" id="validacion">
    <div class="container">

        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
            <br>
            <br>
            <br>

                <h2>
                    Validación del RFC
                </h2>
                <p>
                    Se validará que todos los RFC receptores se encuentren registrados ante el SAT a partir de un listado que ofrece la Autoridad. El listado se renueva todos los días de manera automática.
                    <br>
                    <br>
                    El Registro Federal de Contribuyentes es una llave que requiere toda persona física o moral en México para realizar cualquier actividad económica lícita por la que esté obligada a pagar impuestos. 
                </p>
                <br>
                <a class="boton_personalizado" href="https://portalsat.plataforma.sat.gob.mx/ConsultaRFC/" target="_blank">Validar RFC</a>
                <br>
                <br>
                <br>
                <br>
            </div>
            <center>
            <br>
            <br>
            <br>
            <br>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="img/img-facture/SAT-logo-1.png" width="150">
                    </img>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </center>
        </div>

    </div>
</section>
    <!---->
    <!---->
<section class="secciones-noi" id="complementos">
    
      <div class="fondo-gray">
       <div class="container"> 
      
        <div class="row">
            <div class="col-md-12 text-center texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
           
                <h2>
                    ¿Cuándo aplica el complemento de pagos?
                </h2>
                <p>
                    <i class="fa fa-list-alt fa-2x" aria-hidden="true"></i>  El uso de este CFDI será de carácter obligatorio cuando se den los siguientes supuestos:
                </p>
            </div>
            <div class="lis-compl text-left">
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>
                  Cuando se desconozca la forma en que se realiza el pago.</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>
                  Cuando el pago se haga en parcialidades.</li>
                      <li><i class="fa fa-check" aria-hidden="true"></i>
                  Cuando la factura se emita a crédito.</li>
                      
                    </ul> 
            </div>

            
            
        </div>
      </div>
    </div>

</section>
    <!---->
    <!---->
    <div>
    <br>
    <br>
    <br>
    <br>  
    </div>
    <!---->
<section class="secciones-noi" id="validacion">
    <div class="container">

        <div class="row borde">
        <center>
            <br>
            <br>
            <br>
            <br>
                <div class="col-md-4 img-izquierda wow fadeInRight image-centrada" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="image/nueva_factura.png" width="300px" height="170px">
                    </img>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </center>
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Catálogo de Productos y Servicios
                </h2>
                <p>
                    Te facilitamos el acceso a una herramienta liberada por el sat muy interactiva para que puedas copnsultar las claves de productos y servicios, además de unidades de medida que necesitas incluir al emitir tus facturas en su versión 3.3.
                    <br>
                    
                <br>
                <a class="boton_personalizado" 
                href="http://200.57.3.46:443/PyS/catPyS.aspx" target="_blank">
                Catálogo de Productos y Servicios
                </a>
                <br>
                <br>
                <br>
                <br>
            </div>
            
        </div>

    </div>
</section>
    <!---->
    <!---->
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Soluciones para CFDI V.3.3</h2>

            <p class="sub-title pad-bt15">
            Contamos con asesores de sistemas administrativos
            <br>para cumplir adecuadamente con los requisitos que exije el SAT visita y conocelos </p>
            <hr class="bottom-line">
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="https://inelco.mx/" target="_blank">
                  <img src="image/logos/inelco.png" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>Inelco</h2>
             
               
                <p>Inelco IT Solutions provee soluciones integrales a necesidad de información, automatizando los procesos de las micro, pequeñas y medianas empresas, con productos de calidad orientadas</p>
                
                <a href="https://inelco.mx/" class="read-more" target="_blank">Conócelos →</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="https://www.aspelsoluciones.com" target="_blank">
                  <img src="image/logos/aspelsoluciones.png" class="img-responsive">
                </a>
               <br>
              </div>
              <div class="blog-info">
                <h2>Aspel Soluciones</h2>
               
                <p>
                 Aspel Soluciones es el área especializada de Inelco IT Solutions para las empresas del sector administrativo, brindando soluciones completas de tecnología y servicios de consultoría que te permiten administrar y operar adecuadamente tu empresa.
                </p>

                <a href="https://www.aspelsoluciones.com" class="read-more" target="_blank">Conócelos →</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
              <a href="http://www.solucionespararestaurantes.mx/" target="_blank">
                  <img src="image/logos/soluciones.png" class="img-responsive">
                </a>
           
              </div>
              <div class="blog-info">
                <h2>Soluciones Para Restaurantes</h2>
               
                <p>
                Encuentra las soluciones de tecnología y consultoría empresarial que necesitas para controlar y optimizar los procesos de tu restaurante, bar u hotel de manera segura y eficiente 
                 
                </p>
              <a href="http://www.solucionespararestaurantes.mx/" class="read-more" target="_blank">Conócelos →</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="http://syca.com.mx/index.php" target="_blank">
                  <img src="image/logos/logo-syca.png" class="img-responsive">
                </a>
              <br>
              </div>
              <div class="blog-info">
                <h2>SYCA Consultores</h2>
             
                <p>
                  Nuestro principal objetivo es ayudarte a mejorar y automatizar el control de tu negocio a través de tecnología, sistemas administrativos y consultoría de bajo costo y alto impacto.
                </p>
                <a href="http://syca.com.mx/index.php" class="read-more" target="_blank">Conócelos →</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  
<section class="secciones-noi" id="barra-solida">
    <div class="fondo-morado">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                Cuéntanos en que te podemos apoyar y en breve nos pondremos en contacto contigo.
            </h2>
            {{--
            <h3 class="frase-gratis">
                Solicita una licencia y prueba toda su funcionalidad por 30 dias ¡gratis!
            </h3>
            --}}
            <div class="row">
                <div align="center" class="col-xs-12 col-sm-12 col-md-12">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="button-gratis large radius goContrata ancla2" href="https://survey.zohopublic.com/zs/QfCubn" target="_blank">
                            Contactar
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
    <script src="js/js-facture/jquery.min.js"></script>
    <script src="js/js-facture/jquery.easing.min.js"></script>
    <script src="js/js-facture/bootstrap.min.js"></script>
    <script src="js/js-facture/wow.js"></script>
    <script src="js/js-facture/jquery.bxslider.min.js"></script>
    <script src="js/js-facture/custom.js"></script>

    <script src="contactform/contactform.js"></script>

    <script type="text/javascript">
                document.oncontextmenu = function(){return false;}
        </script>

  </body>

                <script type='text/javascript'>
                    function zs_open_window(url, height, width)
                    {var leftPos = 0;var topPos = 0;if(screen)
                    
                      {leftPos = (screen.width - width) / 2;
                      topPos = (screen.height - height) / 2;
                      window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');
                    }
                    }
                </script>
  {{-- 
  <!-- BEGIN # MODAL ACTUALIZACION -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                 
                </div>
                <!-- End # DIV Form -->
            </div>
        </div>
    </div>
<!-- END # MODAL ACTUALIZACION -->    
    </div>
  </div>
  --}}

@stop
