<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<!-- {!! SEO::generate() !!} -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="shortcut icon" href="/img/configuracion/{{$config->urlfavicon}}" type="image/png" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/buttons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">    
    <link rel="stylesheet" href="/css/pnotify.custom.min.css">
  
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-3.2.1.js"></script>
	<script src="/js/script.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/c_evaluaciones_ejemplo.js"></script>
    <script src="/js/pnotify.custom.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <style>
  body {
    font-family: 'Montserrat';
}

    </style>
</head>
<body class="bg-white">
</div>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="col-sm-12 ">
              <div class="text-center">
                <a class="navbar-brand" href="{{ url('/') }}">
               
                <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo contelexperiencias" style="width: 100%;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
              </div>

                <div class=" text-center collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="MARGIN: AUTO;">
                        <li class="nav-item">
                            <a class="nav-link" href="/" title="Portada">INICIO</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/empresa" title="Portada">NOSOTROS</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/experiencias" title="Portada">EXPERIENCIAS</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/" title="Portada">NOVEDADES</a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="/blog" title="Últimas publicaciones">BLOG</a>
                           
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/contacto" title="Datos contacto">CONTACTO</a>
                        </li>
                     
                    </ul>

                   
                </div>
            </div>
        </nav>
        

        @yield('content')
        <div id="fb-root"></div>


        <footer style="font-size: 0.9rem;">
      <div class="">
                <div style="margin-bottom: 0%; margin-top:0%; padding-top: 3%; text-align: left; background-color:#EDEDED; " class=""> 
                <div class="row container">
                <!-- <div class="col-lg-2" style="line-height: 0.5; margin-top:2%;">
                </div> -->
                  <div class="col-lg-6" style="line-height: 0.5; margin-top:1%;">                 
                         <h6 style="text-align: center; color:#1F294B; " >WHATSAPP: 998 158 4785</h6>    
                         <h6 style="text-align: center; color:#1F294B; ">CALL CENTER: 998 296 1096</h6>                      
                         <h6 style="text-align: center; color:#1F294B; ">promociones@contelexperiencias.com</h6>                      
                         <h6 style="text-align: center; color:#1F294B;"><a class=""><strong>Términos y privacidad</strong></a></h6>                         
                  </div>
                      <div class="col-lg-6 " style="line-height: 0.5; margin-top:1%;">
                      <div  style="text-align: right;">
                      <img style= " width: 50%;"src="/img/configuracion/logo2.png" alt="">
                          <!-- <a href="https://www.youtube.com/channel/UCsxX_6skG3RYIp8AtF1PZww" target="_blank">
                          <img style= " width: 12%;"src="/img/configuracion/youtube-logo.png" alt="">
                          </a>
                          <a href="https://www.facebook.com/ContelExperiencias"  target="_blank">
                          <img style= " width: 12%;"src="/img/configuracion/facebook-logo.png" alt="">
                          </a> 
                          <a href="https://twitter.com/contelexperiencias" target="_blank">
                          <img style= "width: 12%;"  src="/img/configuracion/twitter-logo.png" >
                          </a>                           -->
                        </div>
                    </div>
               </div>             

                <!-- <div class="row"> 
                <img src="/img/configuracion/background.PNG" alt="footer" style="width: 100.2%;">
                     
                </div> -->

                </div>
                </div>
            </footer>
</body>
</html>
<script>
function change_image(image){
var image_container = document.getElementById("main-image");


image_container.src = image.src;

}
const els = document.querySelectorAll("[type='radio']");
for (const el of els)
  el.addEventListener("input", e => reorder(e.target, els));
reorder(els[0], els);

function reorder(targetEl, els) {
  const nItems = els.length;
  let processedUncheck = 0;
  for (const el of els) {
    const containerEl = el.nextElementSibling;
    if (el === targetEl) {//checked radio
      containerEl.style.setProperty("--w", "100%");
      containerEl.style.setProperty("--l", "0");
    }
    else {//unchecked radios
      containerEl.style.setProperty("--w", `${100/(nItems-1)}%`);
      containerEl.style.setProperty("--l", `${processedUncheck * 100/(nItems-1)}%`);
      processedUncheck += 1;
    }
  }
}

</script>