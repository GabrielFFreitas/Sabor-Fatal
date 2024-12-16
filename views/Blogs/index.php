<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php include '../includes/head.php' ?>
    <link rel="stylesheet" href="blogs.css"> 
<body>
  <div class="bg-black">
    <?php include '../includes/header.php' ?>

    <div class="text-center py-3 f-80 f-w font">
              N<img class="texto-rosca" src="../../img/donnut.png" alt="donnut O">ss<img class="texto-rosca"
                  src="../../img/donnut.png" alt="donnut O"> Bl<img class="texto-rosca" src="../../img/donnut.png"
                  alt="donnut O">g
    </div>

    <div id="carouselExampleIndicators" class="carousel slide mt-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner pb-5">
      <div class="carousel-item active">
        <div class="m-auto d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="../../img/bolo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <div class="m-auto d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="../../img/bolo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <div class="m-auto d-flex justify-content-center">
          <div class="card carrosel-card" style="width: 18rem;">
            <img src="../../img/bolo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>  

  <div class="text-center mt-5">
              <a href=""><button class="px-5 botao-carrosel rounded-5"><span class="font-ms f-50 f-w"><strong>Ler
                              artigo</strong></span></button></a>
  </div>

  <div class="d-flex justify-content-center">
    <div class="bg-rosa card-blog">

      <div>Video yt</div>

      <h5><strong>Autor: </strong>Gabi Oliveira</h5>
      <h5><strong>Duração: </strong>28:55</h5>
      <h5><strong>Data de Lançamento: </strong>24/07/2024</h5>
      <h5><strong>Descrição: </strong>Mais um vídeo de receitas de Doces para Festa e hoje vou ensinar para vocês 14 sabores diferentes de docinhos usando apenas 5 receitas, e o melhor, NÃO VAI AO FOGO! </h5>

    </div>
  </div>
</div>
  <?php include '../includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>
