<?php
include_once("./views/Header.php");
require('config/connection.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Função para exibir dados da tabela de banner
function displayBannerData($conn) {
    $query = "SELECT * FROM home";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed for landing: " . mysqli_error($conn));
    }

    // Retorna o resultado da consulta
    return $result;
}

// Função para exibir dados da tabela de serviços
function displayServicesData($conn) {
    $query = "SELECT * FROM servicos";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed for servicos: " . mysqli_error($conn));
    }

    // Exibir dados na seção de serviços
    // ...

    mysqli_free_result($result);
    return $result; // Adicionando retorno para a iteração
}

// ... (código das outras funções)

// Chamar as funções para obter os resultados das consultas
$servicosResult = displayBannerData($conn);

mysqli_close($conn);
?>

<!-- ======= Seccao do Banner======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Transforme a sua casa em um ambiente mais eficiente e <br>seguro com a ajuda da AES,SA<span>.</span></h1>
          <h2>Economize energia, salve vidas</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Painel Solares </a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Material Electrico</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Consultoria</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Eficiencia energetica</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- Fim do Banner -->
<main id="main">

    <!-- ======= Seccao do Sobre Ampere - Romoaldo Doliz ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/banner.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3 style="color:#1d937a">Somos especializados em oferecer soluções em energia solar, venda de materiais elétricos, instalação elétrica e automação elétrica para residências e empresas.</h3>
            <p class="fst-italic">
            Estamos comprometidos em ajudá-lo a transformar a sua casa ou empresa em um ambiente mais eficiente, econômico e sustentável.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Projectos de Mini-Centrais Solares</li>
              <li><i class="ri-check-double-line"></i> Projectos de Electrificação</li>
              <li><i class="ri-check-double-line"></i> Obras em Curso</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- Fim da seccao sobre Ampere -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Serviços</h2>
          <p>Veja os nossos serviços</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Auditoría Energética</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
            data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Gestão de Riscos Eléctricos</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
            data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Instrumentação Eléctrica</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Engenharia e Projecto</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Gestão Energética</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Projectos de Electrificação</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Seccao de reuniao com Ampere ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Marque conosco uma reuniāo</h3>
          <p> Estamos comprometidos em ajudá-lo a transformar a sua casa ou empresa em um ambiente mais eficiente, econômico e sustentável</p>
          <a class="cta-btn" href="#">Ligue Já</a>
        </div>

      </div>
    </section><!-- Reuniao com a Ampere fim-->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
            data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
            data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3 style="color:">Nossos Projectos</h3>
              <p>
              Esta seção informativa serve para apresentar aos visitantes o trabalho que a empresa tem realizado em benefício de seus clientes. Além disso, os feedbacks e opiniões dos clientes servem como evidências tangíveis da satisfação do cliente com a Ampere.
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2"
                      class="purecounter"></span>
                    <p><strong>Clientes Satisfeitos</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-sun"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2"
                      class="purecounter"></span>
                    <p><strong>Projectos de Mini-Centrais Solares</strong>
                    </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-ev-front-fill"></i>
                    <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="4"
                      class="purecounter"></span>
                    <p><strong>Projectos de Electrificação</strong></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-building-up"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="4"
                      class="purecounter"></span>
                    <p><strong>Obras em Curso</strong></p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="https://amperees.co.mz/wp-content/uploads/2023/08/pexels-andrea-piacquadio-3758112.jpg" class="testimonial-img" alt="">
                <h3>Carlos Nhassengo</h3>
                <h4>Ceo</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Estou muito satisfeito com os resultados e recomendo os serviços da Ampere-Energy Solutions a todos os empreendedores que desejam uma gestão energética inteligente e econômica para suas empresas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="https://amperees.co.mz/wp-content/uploads/2023/08/pexels-andrea-piacquadio-3758112.jpg" class="testimonial-img" alt="">
                <h3>Carlos Nhassengo</h3>
                <h4>Ceo</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Estou muito satisfeito com os resultados e recomendo os serviços da Ampere-Energy Solutions a todos os empreendedores que desejam uma gestão energética inteligente e econômica para suas empresas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="https://amperees.co.mz/wp-content/uploads/2023/08/pexels-andrea-piacquadio-3758112.jpg" class="testimonial-img" alt="">
                <h3>Carlos Nhassengo</h3>
                <h4>Ceo</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Estou muito satisfeito com os resultados e recomendo os serviços da Ampere-Energy Solutions a todos os empreendedores que desejam uma gestão energética inteligente e econômica para suas empresas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="https://amperees.co.mz/wp-content/uploads/2023/08/pexels-andrea-piacquadio-3758112.jpg" class="testimonial-img" alt="">
                <h3>Carlos Nhassengo</h3>
                <h4>Ceo</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Estou muito satisfeito com os resultados e recomendo os serviços da Ampere-Energy Solutions a todos os empreendedores que desejam uma gestão energética inteligente e econômica para suas empresas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
            <div class="testimonial-item">
                <img src="https://amperees.co.mz/wp-content/uploads/2023/08/pexels-andrea-piacquadio-3758112.jpg" class="testimonial-img" alt="">
                <h3>Carlos Nhassengo</h3>
                <h4>Ceo</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Estou muito satisfeito com os resultados e recomendo os serviços da Ampere-Energy Solutions a todos os empreendedores que desejam uma gestão energética inteligente e econômica para suas empresas.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contactos ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactos</h2>
          <p>Contacte-nos</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3587.4358444102663!2d32.58617508671617!3d-25.95374261852551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69a522cd9ff0d%3A0x7f4f9e0d20c363d6!2s2%20Andar%2C%20Coop%2C%20Edificio%20do%20BC%20Ponto%202%2C%2019%20Rua%20de%20Fran%C3%A7a%2C%20Maputo%2C%20Mozambique!5e0!3m2!1sen!2sus!4v1704313318896!5m2!1sen!2sus"
            frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Visita presencial:</h4>
                <p>Rua da França, 19, 2 Andar,</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>geral@amperees.co.mz</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Chamadas:</h4>
                <p>+258 84 2253479</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensagem</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- Fim da seccao contactos -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
            <h1 class="logo me-auto me-lg-0"><a href="index.html" class="logo me-auto me-lg-0"><img
            src="https://amperees.co.mz/wp-content/uploads/2023/08/LOGO-Main.png" height="50px" width="190px" alt="" class="img-fluid"></a>
            </h1>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subcreva-se a nossa Newsletter</h4>
            <p>Inscreva-se para receber as últimas notícias, promoções exclusivas e actualizações sobre nossos produtos e serviços</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscreva-se">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ampere - Empresa de Engenharia Eléctrica - Built to Build Solutions</span></strong>. 
        Todos Direitos Reservados
      </div>
      <div class="credits">
       Desenvolvido por: <a href="https://romoaldodoliz.github.io/">Romoaldo Doliz</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>