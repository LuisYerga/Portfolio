<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
</head> 

<body>
    <header>
      <?php
      include("header.php")
      ?>
    </header>
  <main>
    <section class="introduccion">
      <div class="container contenedor" id="contenedor1">
        <div id="intro">
          <h1>Luis Yerga Mayor</h1>
          <h6>Desarrollador Web</h6>
          <p>Me dedico al desarrollo de aplicaciones web, contando con conocimientos tanto de front como de back end</p>
        </div>
        <div id="fotoPerfil">
          <img id="imagenPerfil" src="../img/perfil.jpg" alt="Foto pefil">
        </div>
        <div id="redes">
          <img src="../img/linkedin.png" alt="Linkedin">
          <img src="../img/github.png" alt="Github">
          <img src="../img/instagram.png" alt="Instagram">
        </div>
      </div>
    </section>
    <section class="sobreMi">
      <div id="separador1">
        <hr>          
        <h3>Sobre Mi</h3>
      </div>
      <div class="container contenedor" id="contenedor2">
        <div id="informacion">
          <p>Hola, mi nombre es Luis Yerga Mayor. Estudie el grado de Desarrollo de Aplicaciones Web.</p>
          <p>Entre mis capacidades se encuentra el desarrollo en front, aunque personalmente me gusta más dedicarme al backend.</p>
        </div>
        <div id="fotoCodigo">
          <img id="imagenPerfil" src="../img/perfil.jpg" alt="Foto pefil">
        </div>
        <div id="tecnologias">
          <h4>Tecnologías</h4>
          <div class="contenedor" id="subContenedor">
            <div id="front">
              <h6>Lenguajes Front</h6>
              <p>Html, Css, JavaScript</p>
            </div>
            <div id="back">
              <h6>Lenguajes Back</h6>
              <p>SQL, PHP, Java</p>
            </div>
            <div id="frameworks">
              <h6>Framewokr</h6>
              <p>Bootstrap, Laravel, Angular, Sass, React</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>