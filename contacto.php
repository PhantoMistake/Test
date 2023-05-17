<?php

  include 'includes/header.php';

  ?>

    <main>
        <section id="maincontact">

        <h2>Formulario de contacto</h2>
        <form class="clientes" action="guardar.php" method="POST" id="contact_form" runat="s"
        enctype="multipart/form-data">

        <label for="nombre">Nombre:</label><br>
        <input type="Text" id="nombre" name="nombre" maxlength="30" required><br>

        <label for="mensaje">Escriba aqui:</label><br>
        <textarea name="mensaje" id="mensaje" rows="10" cols="20" maxlength='60' required>Write something here</textarea><br>

        <label for="numero">Telefono:</label><br>
        <input type="tel" id="numero" name="numero" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required>

        <button class="submit" type="submit">Enviar Registro</button>
        </form>
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