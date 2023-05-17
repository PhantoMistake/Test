<?php

  include 'includes/header.php';

  ?>
    <main>
        <div id="banner" class="bannerimg">
            
            <div class="bannertxt">
                <h1>Modelado 3D con Blender</h1>
                <h5>La mejor herramienta para modelado digital.</h5>
                <button class="boton"><a href="contacto.php">Contactanos</a></button>
            </div>
        </div>
        <section class="carousel" aria-label="Gallery">
            <ol class="carousel__viewport">
              <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                  <div class="cartxt" id="first">
                    <p>Conoce mas del modelado de objetos 3D con blender</p>
                    <button class="boton"><a href="modelado3d.php">Sobre 3D</a></button>
                  </div>
                <div class="carousel__snapper">
                  <a href="#carousel__slide4"
                     class="carousel__prev">Go to last slide</a>
                  <a href="#carousel__slide2"
                     class="carousel__next">Go to next slide</a>
                </div>
              </li>
              <li id="carousel__slide2" tabindex="1" class="carousel__slide">
                <div class="cartxt" id="sec">
                  <p>Las inovaciones del diseño en 3D</p>
                  <button class="boton"><a href="inovacion.php">Inovacion</a></button>
                </div>
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide1"
                   class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide3"
                   class="carousel__next">Go to next slide</a>
              </li>
              <li id="carousel__slide3" tabindex="2" class="carousel__slide">
                <div class="cartxt" id="third">
                  <p>Contactanos</p>
                  <button class="boton"><a href="contacto.php">contacto</a></button>
                </div>
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide2"
                   class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide4"
                   class="carousel__next">Go to next slide</a>
              </li>
              <li id="carousel__slide4" tabindex="3" class="carousel__slide">
                <div class="cartxt" id="forth">
                  <p>Creatividad sin limites</p>
                </div>
                <div class="carousel__snapper"></div>
                <a href="#carousel__slide3"
                   class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide1"
                   class="carousel__next">Go to first slide</a>
              </li>
            </ol>
            <aside class="carousel__navigation">
              <ol class="carousel__navigation-list">
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide1"
                     class="carousel__navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide2"
                     class="carousel__navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide3"
                     class="carousel__navigation-button">Go to slide 3</a>
                </li>
                <li class="carousel__navigation-item">
                  <a href="#carousel__slide4"
                     class="carousel__navigation-button">Go to slide 4</a>
                </li>
              </ol>
            </aside>
          </section>
    </main>
    <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
        </script>

<?php

        include 'includes/footer.php'

?>
</body>
</html>