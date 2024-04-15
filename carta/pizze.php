
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/carta.css">

<style>
.card {
    margin: 0 2% 5% 2%; 
}
</style>

<?php
$xml = simplexml_load_file("../xml/menu.xml");

if ($xml === false) {
    echo "Error al cargar el archivo XML";
    exit();
}
?>

<div id="contenido">
<br>
<br>
    <img src="../img/logo.png" width="400vh">
<br>
<br>
    <h6> <style>
      h6{
        color: rgb(145, 4, 4);
      }
    </style>LOS MEJORES SABORES DE TAGLIATELLA</h6>
    <h3>Descubre lo mejor de nuestra carta</h3>
<br>
<br>
</div>

<?php
$xml = simplexml_load_file("../xml/menu.xml");
echo '<div class="card-group">';

foreach ($xml->plato as $plato) {
    if($plato['tema'] == 'pizze'){
        $title = (string) $plato->title;
        $imgSrc = (string) $plato->img['src'];
        $desc = (string) $plato->description;
        echo '
        <div class="card">
            <img src="' . $imgSrc . '" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">' . $title . '</h5>
                <p class="card-text">' . $desc . '</p>
            </div>
            <div class="card-footer">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Alérgenos
                    </button>
                    <ul class="dropdown-menu">';
        
                    foreach($plato->imagen as $imagen) {
                        echo '<li><img src="' . $imagen['src'] . '" width="15%">' . $imagen . '</li>';
                    }
        
        echo '</ul>
                </div>
            </div>
        </div>';
    }
}
echo '</div>';
?>

<br>
<br>
<br>
<br>
<br>
<?php
echo '<div class="card-group">';

foreach ($xml->plato as $plato) {
    if($plato['tema'] == 'pizze2'){
        $title = (string) $plato->title;
        $imgSrc = (string) $plato->img['src'];
        $desc = (string) $plato->description;
        echo '
        <div class="card">
            <img src="' . $imgSrc . '" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">' . $title . '</h5>
                <p class="card-text">' . $desc . '</p>
            </div>
            <div class="card-footer">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Alérgenos
                    </button>
                    <ul class="dropdown-menu">';
        
                    foreach($plato->imagen as $imagen) {
                        echo '<li><img src="' . $imagen['src'] . '" width="15%">' . $imagen . '</li>';
                    }
        
        echo '</ul>
                </div>
            </div>
        </div>';
    }
}
echo '</div>';
?>
<br>
<br>
<div class="boton">
    <form action="../index.php">
        <button class="tagliatella-btn">VOLVER</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

