<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include '../includes/head.php' ?>
</head>

<body>

    <?php include '../includes/header.php' ?>

    

    <!-- PROMOÇÕES-->
    <div class="promocoes d-flex flex-inline justify-content-between">
        <div><img class="roscas-1" src="../../img/Donnuts2.svg" alt=""></div>
        <div class="promocoes-tittle text-center align-items-center d-flex f-w">
            <span>Promoções</br> do Dia</span>
        </div>
        <div><img class="roscas-2" src="../../img/Donnuts.svg" alt=""></div>
    </div>



    <!-- PRIMEIRA SEÇÃO-->
    <div>
        <div class="text-center my-5"><span class="font f-70"><strong>Mais Vendidos</strong></span></div>
        <div class="px-5">
            <div class="d-flex flex-inline justify-content-around">
                <div>
                    <div class="background-vendidos">
                        <div class="p-5">
                            <img class="img-vendidos" src="../../img/maisvendidos-1.png" alt="Imagem">
                        </div>
                    </div>
                    <div class="faixa justify-content-center align-items-center d-flex">
                        <span class="font f-w fs-1"><strong>Bolo</strong></span>
                    </div>
                </div>

                <!-- Replicar com JS aqui! -->

            </div>
        </div>
    </div>



    <!-- SEGUNDA SEÇÃO-->
    <div class="opcoes py-4 mt-5">
        <div class="text-center my-2"><span class="f-80 f-r font"><strong>Outras Opções</strong></span></div>

        <div class="d-flex flex-inline justify-content-around">
            <div>
                <div class="background-vendidos">
                    <div class="p-5">
                        <img class="img-vendidos" src="../../img/maisvendidos-1.png" alt="Imagem">
                    </div>
                </div>
                <div class="faixa justify-content-center align-items-center d-flex">
                    <span class="font f-w fs-1"><strong>Bolo</strong></span>
                </div>
            </div>
        </div>
    </div>




    <!-- TERCEIRA SEÇÃO-->
    <div class="blog py-5">
        <div class="text-center py-3 f-80 f-w font">
            N<img class="texto-rosca" src="../../img/donnut.png" alt="donnut O">ss<img class="texto-rosca"
                src="../../img/donnut.png" alt="donnut O"> Bl<img class="texto-rosca" src="../../img/donnut.png"
                alt="donnut O">g
        </div>

        <div>
            <!--    CARROSEL     -->

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card m-auto" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>

        <div class="text-center mt-5">
            <a href=""><button class="px-5 botao-carrosel rounded-5"><span class="font-ms f-50 f-w"><strong>Ler
                            artigo</strong></span></button></a>


        </div>
    </div>



    <?php include '../includes/footer.php' ?>
</body>

</html>