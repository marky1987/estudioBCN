<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400, initial-scale=1, maximum-scale=2">
    <title>Estudio BCN</title>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/estudio.css"/>
</head>
<body>
<header class="header-main">
    <figure class="header-image">
        <img src="imagenes/logoBCN.png" alt="logo bcn"/>
    </figure>
</header>
<nav class="main-menu">
    <ul class="main-menuList">
        <li class="main-menuItem"><a href="index.php">Home</a></li>
        <li class="main-menuItem"><a href="quienes.php">Quienes Somos</a></li>
        <li class="main-menuItem">Trabajos</li>
        <li class="main-menuItem"><a href="contacto.php">Contacto</a></li>
    </ul>
</nav>
<section class="section-main">
    <div class="centrar">
            <?php

            $imagen = array("Accidentes de transito",
                "Accidentes de trabajo",
                "Asistencias a actos jurídicos",
                "Derecho laboral",
                "Derecho penal",
                "Despidos",
                "Familia",
                "Sucesiones"
            );
            ?>

            <?php

            $cantidad=count($imagen);

            for ($n=0; $n < $cantidad ; $n++) {
                ?>

                <div class="work-item">
                    <figure class="work-imageContainer">
                        <img src="imagenes/<?php echo $imagen[$n];?>.jpg">
                        <br>
                        <?php
                        echo $imagen[$n];
                        ?>
                        <br>
                    </figure>
                </div>
        <?php } ?>
    </div>
</section>
<footer class="footer-main">
    <?php include "php/pie.php"; ?>
</footer>
</body>
</html>