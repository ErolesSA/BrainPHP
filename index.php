<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ARG-CODE - Tu Marca en la Web</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favilogo.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


  <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

  <?php
  include "components/nav.php";
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="carousel">
      <div id="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url(assets/img/1.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 data-aos="fade-up" class="animate__animated animate__fadeInDown">Abrí tu sucursal online con el
                    mejor
                    respaldo</h2>


                </div>
              </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url(assets/img/2.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 data-aos="fade-up" class="animate__animated animate__fadeInDown">Integrada con tu sistema de
                    gestión y
                    servicios de pago y entrega</h2>


                </div>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url(assets/img/3.jpg)">
              <div class="carousel-container">
                <div class="container">
                  <h2 data-aos="fade-up" class="animate__animated animate__fadeInDown">Las ventas on line crecieron un
                    101%
                    en el primer semestre de 2021</h2>

                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <!--
        <i class='bx bx-chevron-left'></i>
        <span class="visually-hidden">Previous</span>-->
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <!--<i class='bx bx-chevron-right'></i>
        <span class="visually-hidden">Next</span>-->
          </button>
        </div>
      </div>

    </div>


  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>El futuro ya llego</h3>
            <h2>Crea tu pagina adaptable a dispositivos mobiles.</h2>
            <p>
              En el cuarto trimestre de 2020, se registró que el 63,8% de los hogares urbanos tiene acceso a computadora
              y el 90%, a internet. Además, los datos muestran que, en la Argentina, 88 de cada 100 personas emplean
              teléfono celular y 85 de cada 100 utilizan internet.
            </p>
            <div class="text-center text-lg-start">
              <a href="#"
                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Ver todas las funcionalidades</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/iphone.png" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->



  <!-- ======= Servicios ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">

        <h2>Qué ofrecemos</h2>
        <p></p>
      </div>
      <!--
              <div class="row content">
                <div class="col-lg-6">
                  <br>
                  <br>
                  <br>
                  <p>
                    La solución de eCommerce de ARG-CODE que resuelve todo lo necesario para que tu comercio o empresa pueda contar con una sucursal en Internet de nivel profesional.
                  </p>
                  
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  
                  <div class="row content"><img src="assets/img/products-for-sale.jpg" alt=""></div>
                  
                </div>
              </div>-->

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-x">
            <div class="icon">

              <i class="bi bi-phone-fill"></i>

            </div>
            <h4><a href="">DISPOSITIVOS MÓVILES</a></h4>
            <p>Diseño responsivo ajustable a pantallas de computadoras, de teléfonos móviles y de tabletas. ¿Sabías que
              hoy en Argentina casi el 60% de los accesos a sitios web de eCommerce son a través de dispositivos
              móviles?

            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox">
            <div class="icon">

              <i class="bi bi-bar-chart-line"></i>

            </div>
            <h4><a href="">ROBUSTA Y ESCALABLE</a></h4>
            <p> Basada en Magento, la plataforma de eCommerce de software libre líder en el mundo con más de 300.000
              tiendas implementadas. iShop acompaña el crecimiento de tu negocio.

            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink">
            <div class="icon">

              <i class="bi bi-people-fill"></i>
            </div>
            <h4><a href="">MARKETING</a></h4>
            <p>Permite la creación de todo tipo de promociones, asi como la venta de vouchers y cupones y la integración
              a sitios de compra con descuentos.

            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-yellow">
            <div class="icon">

              <i class="bi bi-shop"></i>
            </div>
            <h4><a href="">RENTABLE Y LLAVE EN MANO</a></h4>
            <p>Sin inversiones adicionales. Incluye servidores con alojamiento administrado, soporte técnico y help
              desk, asi como el mantenimiento y la actualización de todos nuestros productos.

            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">

              <i class="bi bi-credit-card"></i>

            </div>
            <h4><a href="">INTEGRABLE</a></h4>
            <p>Con medios de pago en línea, con medios de envío y con su sistema de gestión para mantener sincronizado
              el catálogo de productos, clientes, precios, stock y ventas.

            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-2" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">

              <i class="bi bi-file-earmark-person"></i>
            </div>
            <h4><a href="">FLEXIBLE Y PERSONALIZABLE</a></h4>
            <p> El sitio web se personaliza con tu identidad visual y cuenta con un diseño profesional. El catálogo de
              productos se puede configurar a tu medida.

            </p>
          </div>
        </div>

      </div>


    </div>

  </section><!-- End Servicios Section -->





<?php
include "components/cta.php";
?>

  
<?php
include "components/contact.php";
?>



  <!-- ======= about1 Us Section ======= 
    <section id="about1" class="about1">
      <div class="container" data-aos="fade-up">

        

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Acompañamos el crecimiento de cada marca
            </p>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Emprendedores, PyMEs y grandes negocios. Cada marca tiene su ritmo de crecimiento y en Tiendanube tenemos planes, funcionalidades y asesoramiento específicos para cada uno de ellos.
            </p>
            <a href="#" class="btn-learn-more">Contratar</a>
          </div>
        </div>

      </div>
    </section>-->
  <!-- End about1 Us Section -->

<?php
include "components/footer.php";
?>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Vendor JS Files -->


  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


  <!-- Optional JavaScript; choose one of the two! -->

  <script src="script.js"></script>
  <script src="main.js"></script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>