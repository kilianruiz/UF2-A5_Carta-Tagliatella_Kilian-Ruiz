<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Document</title>
</head>
<body>
<?php
$xml = simplexml_load_file("./xml/menu.xml");

if ($xml === false) {
    echo "Error al cargar el archivo XML";
    exit();
}
?>
<div id="logo">
    <img src="./img/logo.png">
</div>
<h6>LOS MEJORES SABORES DE TAGLIATELLA</h6>
<h3>Descubre lo mejor de nuestra carta</h3>
<div id="items3">
    <div>
        <p><a href="#Carta">Carta</a></p>
    </div>
    <div>
        <p><a href="./recomendaciones.php">Recomendaciones</a></p>
    </div>
    <div>
        <p><a href="./novedades.php">Novedades</a></p>
    </div>
</div>

<div id="Carta">
    <div id="imagenes8">
    <?php
        foreach($xml->plato as $plato){
            if($plato['tema'] == 'carta'){
                echo "<div class='plato-container'>"; 
                echo "<h6>" . $plato->title . "</h6>";
                // Verifica si el título es "Aperitivi" y agrega el enlace correspondiente
                if ($plato->title == "Aperitivi") {
                    echo "<a href='./carta/aperitivi.php'>";
                    echo "<img src=" .   $plato->img['src'] . ">";
                    echo "</a>";
                }  if ($plato->title == "Antipasti") {
                    echo "<a href='./carta/antipasti.php'>";
                    echo "<img src=" .   $plato->img['src'] . ">";
                    echo "</a>";
                } if ($plato->title == "Insalate") {
                    echo "<a href='./carta/insalate.php'>";
                    echo "<img src=" .   $plato->img['src'] . ">";
                    echo "</a>";
                } if ($plato->title == "Le pizze") {
                    echo "<a href='./carta/pizze.php'>";
                    echo "<img src=" .   $plato->img['src'] . ">";
                    echo "</a>";
                } if ($plato->title == "Pasta tradizionale") {
                    echo "<a href='./carta/pasta.php'>";
                    echo "<img src=" .   $plato->img['src'] . ">";
                    echo "</a>";
                } if ($plato->title == "Dolci") {
                    echo "<a href='./carta/dolci.php'>";
                    echo "<img src=" .   $plato->img['src'] . ">";
                    echo "</a>";
                }
                echo "</div>"; 
            }
            }
        ?>

    </div>
</div>

</body>
</html>