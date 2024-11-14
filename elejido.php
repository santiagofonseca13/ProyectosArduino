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
                        <li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
                        <li class="menu-selected"><a href="#" class="text-menu-selected"> <i class="fab fa-file"> </i>Smart Sprinkle</a></li>
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
            <img src="img/Smart/6.jpeg" alt="">
            <img src="img/Smart/7.jpeg" alt="">
            <img src="img/Smart/5.jpeg" alt="">
            <img src="img/Smart/4.jpeg" alt="">
            <img src="img/Smart/3.jpeg" alt="">
            <img src="img/Smart/1.jpeg" alt="">
            <img src="img/Smart/2.jpeg" alt="">
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
        </div>
    </div>

    <!--Pie de pagina-->
    <?php include 'src/footer.php'; ?>
</div>
</body>
<script src="js/script.js"></script>
<script src="js/reloj.js"></script>
</html>