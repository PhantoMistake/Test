<?php

  include 'includes/header.php';

  ?>

<main id="corr">
    <section id="about">
        <div id="aboutxt">
            <p>Blender es un software que brinda la posibilidad de cambiar la posición, el tamaño y la orientación de un
                elemento, animar a un personaje o a un objeto sólido. Se ha popularizado porque es una herramienta muy
                usada para desarrollar videojuegos desde cero, gracias a la versatilidad y compatibilidad con otros
                programas de creación y motores de videojuegos, como Unreal Engine o Unity.</p>
            <p>
                Blender 3D, al contar con la posibilidad de crear elementos básicos de la animación 3D, como personajes
                y entornos, también es el programa ideal para comenzar tu propio cortometraje de cine animado.</p>
            <p>
                Una de las razones por las que más se acude a Blender para hacer diseño 3D, es porque, de acuerdo con
                Blender.org “los profesionales de los efectos visuales consideran que es el mejor rastreador del
                mercado, porque incluye cámara lista para producción y seguimiento de objetos. Permitiéndole importar
                metraje en bruto, rastrearlo, enmascarar áreas y ver los movimientos de la cámara en vivo en su escena
                3D”. </p>
            <p>Blender es compatible con 36 idiomas y es multiplataforma, lo que lo convierte en una herramienta súper
                accesible y a la vez potente tanto para principiantes como para profesionales, con una interfaz fácil y
                ágil basada en OpenGL y actualizaciones frecuentes. Por lo que también destaca Blender es por su
                dinámica comunidad de usuarios, donde se comparte mucha información útil y práctica para los que se
                inician en el modelado 3D.</p>
            <p>
                Dado el inmenso abanico de herramientas y módulos disponibles, el mayor reto al que se enfrentan los
                nuevos usuarios es que empezar a hacer cosas con Blender puede resultar complicado y agobiante. Para
                dominar realmente el programa, hay que dedicar cierto tiempo a aprender los atajos y a ver muchos
                tutoriales de la comunidad para familiarizarse con las funciones. Por tanto, se necesita algo de tiempo
                (y paciencia) para dominar esta especie de navaja suiza del modelado 3D.</p>
        </div>
        <div id="aboutvid">
        <iframe height=auto src="https://www.youtube.com/embed/k8lSZGZv-Dc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div id="aboutfull">

        </div>
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