
<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>Hello, world!</title>

  </head>
 
<body>
<header>

<div class="languages-menu">
          <label for="language-header" 
          class="hidden">Idioma</label><select id="language-header" onchange="location=this.value;">
            <optgroup label="España">
              <option name="es" selected="selected" data-subtext="España -" value="/es/inicio" href="/es/inicio">Español</option>
              <option value="/va/inici" data-href="/va/inici" name="va" data-subtext="España -">Valencià</option>
              <option value="/ca/inici-ca" data-href="/ca/inici-ca" name="ca" data-subtext="España -">Català</option>
              <option value="/gl/inicio-gl" data-href="/gl/inicio-gl" name="gl" data-subtext="España -">Galego</option>
              <option value="/eu/hasiera" data-href="/eu/hasiera" name="eu" data-subtext="España -">Euskara</option><option value="/en/home" data-href="/en/home" name="en" data-subtext="España -">English</option>
              <option value="/de/startseite" data-href="/de/startseite" name="de" data-subtext="España -">Deutsch</option>
            </optgroup>
            <optgroup label="Portugal">
               <option value="https://www.mercadona.pt/pt/iniciacao" data-href="https://www.mercadona.pt/pt/iniciacao" name="pt" data-subtext="Portugal -">Português</option>
            </optgroup>
        </select>
				</div>
    
  <div class="row">
    <div class="col">
         <img src="https://www.mercadona.com/estaticos/images/mercadona_logo/es/mercadona-imagotipo-color-72.png" srcset="https://www.mercadona.com/estaticos/images/mercadona_logo/es/mercadona-imagotipo-color-72.png 1x, https://www.mercadona.com/estaticos/images/mercadona_logo/es/mercadona-imagotipo-color-300.png 2x" alt="mercadona"width="350">
    </div>
    <div class="col">
       <a  id= "boton"class="btn btn-rounded-shop buy-button">
      <span class="fa icon-fmd-cart" aria-hidden="true">
      </span> Compra online</a>
    </div>
  </div>
  <nav>
  <div>
        <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Conócenos</a>
              <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Supermercados</a>
              <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Servivios</a>
              <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Consejos</a>
              <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Actualidad</a>
              <nav class="navbar navbar-expand-lg ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Atención al cliente</a>  
              </div>
            </div>
        </nav>
   
  <div>
    <img src="imagen/fruta.jpg">
   </div>
  <div class="titulo">
  <h1> Actualidad Mercadona </h1>
   </div>
<div class= "card-group" > 
<div class= "card" >
            <img class= "card-img-top" src= "imagen/patatas.jpg" alt= "Card image cap" > 
            <div class= "card-body" >  
            <p class= "card-text" > Mercadona compra 290.000 kilos de patata de Álava, un 23% más que la campaña anterior</p>
          <p class= "card-text" >
          <small class= "text-muted" ><?=date('d-m-Y');?></small>
        </p>
            <button type="button" class="btn btn-primary btn-sm">Responsabilidad social.</button>
            <button type="button" class="btn btn-primary btn-sm">Donaciones de alimentos.</button>
          </div>
   </div>
    <div class= "card" > 
    <img class= "card-img-top" src= "imagen/alcachofas.jpg" alt= "Card image cap" > 
    <div class= "card-body" >  
    <p class= "card-text" > Mercadona compra 1 millón de kilos de alcachofa en Tudela  </p>
     <p class= "card-text" ><small class= "text-muted" > <?=date('d-m-Y');?></small>
     </p> 
     <button type="button" class="btn btn-primary btn-sm">Productos de proximidad.</button>
     </div> 
     </div> 
     <div class= "card" >
      <img class= "card-img-top" src= "imagen/empleos.jpg" alt= "Card image cap" >
       <div class= "card-body" > 
        <p class= "card-text" > Vacantes de empleo Logística y Mantenimiento en Mercadona </p>
         <p class= "card-text" >
         <small class= "text-muted" > <?=date('d-m-Y');?> </small>
         </p>
         <button type="button" class="btn btn-primary btn-sm">Productos de proximidad.</button>

         
          </div> 
    </div> 
  </div> 
  <div id="formulario">

      <p class="text-center"><a href="">Ver todos</a></p>
      <h5>Mercadona cuenta con 1.625 supermercados. <br>Encuentra tu Mercadona más cercano y su horario</h5>
        <div class="row justify-content-center">
            <div class="col-4 input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i>Buscar</button>
                </div>
            </div>
        </div>
 
       <p class="text-center"><button type="button" class="btn btn-link"><i class="fas fa-location-arrow"></i>Usar mi localización actual.</button></p>
</div>
       <div class="row" id="anuncios">
           <div class="col" id="hijo">
               <h1><i class="fas fa-bullhorn"></i></h1>
                <h3>Atención al Cliente</h3>
                
              <div id="hijo">Puedes realizar cualquier comentario o consulta
                 llamándonos a nuestro<strong>teléfono gratuito de Atención al Cliente</strong>
                 , enviando un <strong>Correo Electrónico</strong> o si lo prefieres contacta 
                 con nosotros a través de nuestras <strong>Redes Sociales</strong>.</div>
                
                </div>
           <div class="col" id="hijo">
           <h1><i class="far fa-calendar"></i></h1>
                <h3>Memorias anuales</h3>
                <p>Notas de prensa, estudios, informes, memorias anuales y otro material corporativo.</p>
           </div>
     </div>
  <div id="ofertas-empleo" id="centrado-porcentual">
     <h1><b>Ofertas de empleo</b></h1>
     <p>Mercadona dispone de un Modelo de Recursos Humanos reconocido por ofrecer puestos de trabajo estables y de calidad.</p>
     <button type="button" class="btn btn-primary btn-lg">Ofertas de empleo.</button>
  </div>
  <div id="logo-footer" class="text-center">
  <img src="imagen/mercadona.jpg" alt="mecadona" width="560 px">
  </div>
 <footer>
    <div class="row">
        <div class="col">
           <ul>
              <strong>Lo más buscado</strong>
                <li>Localizar Supermercados</li>
                <li>Trabajar con nosotros</li>
                <li>Sala de prensa</li>
                <li>Conoce mercadona</lil>
                <li>Consejos</li>
            </ul>
        </div>
        <div class="col">
          <b>Enlaces de interés</b>
              <ul>
                <li>Compra online</li>
                <li>Tarjeta mercadona</li>
                <li>Facturas de clientes</li>
                <li>Portal de trabajador</li>
                <li>E-factura de proveedores</li>
                <li>Portal trinidad</li>
              </ul>
         </div>
       <div class="col">
       <b>Consejos</b>
        <ul> 
          <li>Consejos de alimentación</li>
          <li>Consejos de perfumería</li>
          <li>Consejos de hogar</li>
          <li>Consejos de mascotas</li>
          </ul>
      </div>
      <div class="col">
          <b>Atencion al cliente</b>
          <ul>
            <li><a href=""><i class="fas fa-envelope"></i>Contacto</a></li>
            <li><a href=""><i class="fas fa-phone"></i>900 500 103</a></li>
          </ul>
            <p><b>Redes sociales</b></p>
          <p>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-instagram"></i>
          </p>
      </div>
      <div class=col>
        <img src="imagen/footer.jpg" alt="mercadona" width="150px">
      </div>
  </div>

  <div class="row">
    <div class="col md-4">
      <h6>© Mercadona S.A. A46103834. Todos los derechos reservados.</h6>
    </div>
    <div class="col md-8">
      <ul>
        <li>Accesibilidad </li>
        <li>Condiciones wifi</li>
        <li>Politica de privacidad</li>
        <li>Politica de cokkis</li>
        <li>Termino y condiciones</li>
        <li>Requisitos técnicos</li>
     </ul>
    </div>
  </div>
</footer>
  
  
  
  
  




  
       
  
    
    <!--Optional JavaScript-->
    <!--jQuery first,the Pooper.js, the Booststrap JS-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>

</htm