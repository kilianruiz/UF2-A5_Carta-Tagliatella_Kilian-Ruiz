<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/carta.css">

<style>
    #salsa {
    display: flex;
    flex-wrap: wrap; 
  }

  .card {
    width: 14rem;
    margin-bottom: 1rem; 
    margin: 0 0.5% 2% 0.5%; 
  }
</style>

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
      <h3>Crea tu plato eligiendo la pasta y la salsa</h3>
      <h6> <style>
        h6{
          color: rgb(145, 4, 4);
        }
      </style>ELIGE TU PASTA FAVORITA:</h6>
  <br>
  <br>
</div>

<?php
$xml = simplexml_load_file("../xml/menu.xml");
echo '<div class="card-group">';

foreach ($xml->plato as $plato) {
    if($plato['tema'] == 'pasta'){
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
<div id="contenido">
  <br>
  <br>
      <h6> <style>
        h6{
          color: rgb(145, 4, 4);
        }
      </style>ELIGE LA SALSA PARA LA PASTA:</h6>
</div>
<br>
<br>

<?php
$xml = simplexml_load_file("../xml/menu.xml");
echo '<div id="salsa">';

foreach ($xml->plato as $plato) {
    if($plato['tema'] == 'salsa'){
        $title = (string) $plato->title;
        $desc = (string) $plato->description;
        echo '
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">' . $title .'</h5>
            <p class="card-text">' . $desc . '</p>
          </div>
        </div>';
    }
}
echo '</div>';
?>



<div class="boton">
    <form action="../index.php">
        <button class="tagliatella-btn">VOLVER</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
