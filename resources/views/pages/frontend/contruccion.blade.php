<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @yield('meta_tags')
     <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
     <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
     <meta name="robots" content="index, follow">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-LB8YL93JB9"></script>
     <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'G-LB8YL93JB9');
     </script>
</head>
<body>
     <!-- Google Tag Manager (noscript) -->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZFL3P7"
     height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
     <!-- End Google Tag Manager (noscript) -->
     <div id="app">
          <div class="contentBlur">
               <div class="homeBanner pageConstruccion">
                    <div class="boxBackground fullScreen">
                         <div class="d-flex fullHeight justify-content-center align-items-center flex-column">
                              <img src="{{ asset('frontend/images/pa.svg') }}" class="imgAux2" alt="">
                              <img src="{{ asset('frontend/images/zoo.svg') }}" class="imgAux" alt="">
                              <img src="{{ asset('frontend/images/amigable2.svg') }}" class="imgAux3 mt-1" alt="">
                              <p class="txtCenter mt-4">Muy Pronto</p>
                              <div class="boxLogos d-flex justify-content-between align-items-center">
                                   <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/images/mega.svg') }}" alt="Mega Plaza" title="Mega Plaza">
                                   </a>
                                   <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/images/quinde.svg') }}" alt="Quinde" title="Quinde">
                                   </a>
                                   <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/images/parque.svg') }}" alt="Parque Lambramani" title="Parque Lambramani">
                                   </a>
                                   <a href="javascript:void(0)">
                                        <img src="{{ asset('frontend/images/io.svg') }}" alt="InOutlet" title="InOutlet">
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>