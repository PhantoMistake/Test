<?php

  include 'includes/header.php';

  ?>

    <main id="ino">
        <div id="inovate"></div>
        <div id="aboutfull">
            <p>Es posible que haya oído hablar de la pelicula Next-Gen antes, pero saber que se crea utilizando solo Blender lo hace
                aún más sorprendente. ¡Esta película de ciencia ficción y acción fue realizada por los mejores artistas
                de la industria en todo el mundo y muestra estos talentos con impresionantes escenas de la película!</p>
            <p>
                Next-Gen cuenta la historia de una adolescente rebelde y su encuentro con un robot de alta tecnología y
                sus aventuras juntas; ¡Deberías agregar esta película a tu reloj si aún no la has visto! ¡Puedes
                encontrar la película solo en Netflix ya que compraron sus derechos mundiales en 2018 por 30 millones de
                dólares!</p>
            <p>
                Aun siendo una herramienta relativamente nueva, ha gozado de la aceptación de muchos animadores
                independientes y pequeños estudios (sobre todo para anuncios de televisión). En las superproducciones
                aún no la han usado para generar CGI finales (tal como se ven en el cine o en la televisión), pero sí la
                han usado en etapas intermedias. A continuación hay un listado de proyectos que la han usado
                profesionalmente:<br>
                <ol>
                <li>El 18 de febrero de 2010 se estrenó el primer largometraje animado realizado íntegramente con software
                libre, usando a Blender como herramienta principal; se trata de Plumíferos, proyecto que está
                impulsando el desarrollo de Blender aún más, sobre todo a nivel de animación y manejo de bibliotecas a
                gran escala.<li>
                <li>Se ha usado en películas, tales como Spider-Man 2, para hacer previsualización de escenas (Screen-Board
                Test). También ha sido usada en la película, de Marvel, Captain America: The Winter Soldier.
                Hay algunas propuestas más llevadas a la producción e integración con gráficos mediante Motion Track,
                tales como "Friday or another day", que es de los primeros casos de su uso junto con película de 35mm.<li>
                <li>Ha sido la principal herramienta en proyectos, hechos con participación de diversos usuarios de Blender
                y encabezados por Ton Rossendaal, como el cortometraje Elephants Dream.Esos proyectos sirven como
                experimentos de sus capacidades, aportando esta experiencia a los demás usuarios.<li>
                </ol>
            </p>
        </div>
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