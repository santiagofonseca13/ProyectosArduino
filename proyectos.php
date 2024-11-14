<!DOCTYPE html>
<html lang="es">
<?php include 'src/head.php'; ?>
<body>
    <!--Cabezera-->
    <header>
        <div class="header-content">
            <div class="logo">
                <h1><b>Proyectos </b>Uniminuto - IED Rincon Santo</h1>
            </div>
            <!--Menu-->
            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li><a href="index.php"> <i class="fas fa-home"></i>Inicio</a></li>
                        <li><a href="elejido.php"> <i class="fab fa-file"> </i>Smart Sprinkle</a></li>
                        <li class="menu-selected"><a href="proyectos.php" class="text-menu-selected"> 
                            <i class="fas fa-headset"></i>Proyectos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="icon-menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <div class="container-all" id="move-content">

    <!--Portada-->

    <div class="proyectos-container-cover">
        <div class="container-info-cover">
            <h1>¡Uniminuto - IED Rincon Santo!</h1>
            <p>Proyectos con Arduino</p>
        </div>
    </div>

    <div class="container-post">

    <!--Contenido-->

    <div class="container-content-proyectos">
        <article  id="Descripcion"><br>
            <h1>Presentación de Proyectos de Arduino</h1><br>
            <h2>Grado 11 - IED Rincón Santo</h2>
            <h3>Introducción</h3>
            <p>En esta presentación, se muestra algunos de los proyectos de estudiantes de grado 11 
                compartiendo sus emocionantes proyectos realizados con Arduino.
            </p>
        </article>
    </div>

        <div class="posts">

            <div class="post">
                <div class="ctn-img"><img src="img/img13.jpeg" alt=""></div>
                <h2>Smart Prinkle</h2>
                <span>Sistema de Riego</span>
                <a href="elejido.php"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img70.jpeg" alt=""></div>
                <h2>Smart Count</h2>
                <span>Al pasar una persona la mano frente al dispositivo sera contado,
                     o al pasar la mano en sentido contrario se restara, esto sirve 
                     para saber cuantas personas hay en un lugar.</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img69.jpeg" alt=""></div>
                <h2>NAVIBOT</h2>
                <span>Evasor de Ostaculos</span>
                <a href="img/navi.mp4"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img26.jpeg" alt=""></div>
                <h2>Tranqueur Solaire</h2>
                <span>Documento PDF</span>
                <a href="img/robotica.pdf"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img42.jpeg" alt=""></div>
                <h2>Alerta de fuego</h2>
                <span>_______</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img46.jpeg" alt=""></div>
                <h2>Casa con luces encendidas a Bluetooth</h2>
                <span>Poder apagar y encender luces con tecnologia bluetooth con arduino</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img53.jpeg" alt=""></div>
                <h2>TECNO IRON</h2>
                <span>Prototipo de guante que traduce las señales pulsadas a traves de movimientos especificos
                    que conllevan a las palabras TECNO-IRON.</span>
                <a href="#"><button>Leer más</button></a>
            </div>
            
            <div class="post">
                <div class="ctn-img"><img src="img/img57.jpeg" alt=""></div>
                <h2>Mano Mecanica</h2>
                <span>________</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img54.jpeg" alt=""></div>
                <h2>Almacenamiento de comida para perros</h2>
                <span>Muchas veces sucede que la comida de los perros se moja o se riega con este proyecto, un perrito
                    al acercarse se le abre la puerta superior y se le permite comer su comida</span>
                </span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img63.jpeg" alt=""></div>
                <h2>Dispensador de Agua</h2>
                <span>Consiste en llenar un vaso de forma automatica cuado lo ponga frente al sensor.</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img20.jpeg" alt=""></div>
                <h2>Conocer Cantidad de CO2 / Temperatura / Humedad /</h2>
                <span>Fecha / Hora</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img3.jpeg" alt=""></div>
                <h2>Robot con Arduido</h2>
                <span>____________</span>
                <a href="#"><button>Leer más</button></a>
            </div>

            <div class="post">
                <div class="ctn-img"><img src="img/img21.jpeg" alt=""></div>
                <h2>Gafas para personas Invidentes</h2>
                <span>____________</span>
                <a href="#"><button>Leer más</button></a>
            </div>

        </div>
    </div>

    <!--Pie de pagina-->
    <?php include 'src/footer.php'; ?>
</div>
</body>
<script src="js/script.js"></script>
<script src="js/reloj.js"></script>
</html>