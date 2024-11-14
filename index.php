<!DOCTYPE html>
<html lang="es">
<?php include 'src/head.php'; ?>
<body>
    <!--Cabezera-->
    <header>
        <div class="header-content">
            <div class="logo">
                <h1><b>Proyectos </b> IED Rincon Santo - Uniminuto </h1>
            </div>
            <!--Menu-->
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li class="menu-selected"><a href="index.php" class="text-menu-selected"> 
                            <i class="fas fa-home"></i>Inicio</a></li>
                        <li><a href="elejido.php"> <i class="fab fa-file"> </i>Smart Sprinkle</a></li>
                        <li><a href="proyectos.php"><i class="fas fa-headset"></i>Proyectos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <div class="container-all" id="move-content">

    <!--Contenido-->

    <div class="container-content">
        <article  id="Descripcion"><br>
            <h1>Presentación de Proyectos de Arduino</h1><br>
            <h2>Universidad minuto de Dios</h2>
            <img src="img/un.png" alt="logo" style="width:200px; height:auto;">
            <p>Hecho por: Santiago Fonseca - Carol Ospina - Paula Gomez</p><br>
            <h2>Grado 11 - IED Rincón Santo</h2>
            <h3>Introducción</h3>
            <p>En esta presentación, se muestra algunos de los proyectos de estudiantes de grado 11 
                compartiendo sus emocionantes proyectos realizados con Arduino.
            </p>

            <!-- Carrusel de imágenes -->
            <div class="carousel-container">
                <div class="carousel">
                    <?php
                    $totalImages = 74;
                    $imageNumbers = range(3, $totalImages);
                    shuffle($imageNumbers);

                    foreach ($imageNumbers as $i) {
                        echo '<div class="carousel-item">';
                        echo '<img src="img/img' . $i . '.jpeg" alt="Imagen ' . $i . '">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        
        </article>

        <div class="container-aside">	
            <aside>
                <img src="img/img26.jpeg" alt="">
                <h2>Tranqueur Solaire</h2>
                <p>Documento PDF</p>
                <a href="img/robotica.pdf"><button>leer más</button></a>
            </aside>

            <aside>
                <img src="img/img69.jpeg" alt="">
                <h2>NAVIBOT</h2>
                <p>Evasor de Ostaculos</p>
                <a href="img/navi.mp4"><button>leer más</button></a>
            </aside>

            <aside>
                <img src="img/img13.jpeg" alt="">
                <h2>Smart Prinkle</h2>
                <p>Sistema de Riego!</p>
                <a href="elejido.php"><button>leer más</button></a>
            </aside>
        </div>
    </div>

    <!--Pie de pagina-->
    <?php include 'src/footer.php'; ?>
</div>
</body>
<script src="js/script.js"></script>
<script src="js/reloj.js"></script>
</html>