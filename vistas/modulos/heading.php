<?php

 /*=============================================
  MANTENER LA RUTA FIJA DEL PROYECTO
  =============================================*/

  $url = Ruta::ctrRuta();
 ?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="img/png" href="<?php echo $url; ?>vistas/images/icon.png">
<title>Tu Tienda en Linea</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Tu Tienda en linea, crea tu propia tienda, si no sabes como empezar preguntanos, estamos para ayudarte" />
<meta name="keywords" content="tienda, ecommerce, venta en linea, mi propia tienda, tienda en linea, vender en linea, venta en linea" />
<meta name="author" content="José Luis Santiago Márquez" />
 
  
<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/animate.css">
<!-- Icomoon Icon Fonts-->
<!--<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/icomoon.css">-->
<!-- Bootstrap  -->
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.css">

<!-- Magnific Popup -->
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/magnific-popup.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl.theme.default.min.css">

<!-- Theme style  -->
<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/style.css">


<!-- Modernizr JS -->
<script src="<?php echo $url; ?>vistas/js/modernizr-2.6.2.min.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b4195866d961556373d8197/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Service",
  "serviceType": "Abre hoy tu tienda en linea",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Tu Tienda en Linea",
    "address": "Eje central 195, Col. Doctores, CDMX",
    "priceRange": "Desde 399 MXN mensuales",
    "telephone": "55 82324671",
  "image": "https://demobackend.tutiendaenlinea.online/vistas/img/plantilla/logo.png"
  },
  "areaServed": {
    "@type": "Country",
    "name": "All"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Tiendas en linea",
    "itemListElement": [
      {
        "@type": "OfferCatalog",
        "name": "Dashboard de administracion",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Optimizacion en buscadores"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Paginas web"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Analytics"
            }
          }
        ]
      },
      {
        "@type": "OfferCatalog",
        "name": "Paquetes",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Basico"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Plus"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "plus +"
            }
          }
        ]
      }
    ]
  }
}
</script>  
 
</head>
