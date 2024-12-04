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
        <div ><img class="roscas-1" src="../../img/cereja.png" alt=""></div>
        <div class="promocoes-tittle text-center align-items-center d-flex f-w">
            <span>Promoções</br> do Dia</span>
        </div>
        <div ><img class="roscas-1" src="../../img/cereja.png" alt=""></div>
    </div>



    <!-- PRIMEIRA SEÇÃO-->
    <div class="categoria-bg">
        <div class="text-center my-5"><span class="font f-80 f-red"><strong>Categorias</strong></span></div>
        <div class="px-5">
            <div class="d-flex flex-inline justify-content-around">
                <div>
                    <div class="background-vendidos">
                        <div class="p-5">
                            <img  class="img-vendidos" src="../../img/maisvendidos-1.png" alt="Imagem">
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
    <div class="opcoes py-4 mt-5 f-ms">
        <div class="text-center mt-2 mb-4 d-flex justify-content-between">
            <img class="chocolate" style="transform: rotate(180deg);" src="../../img/chocolate.png" alt="choco">
            <span class="f-80 f-choco f-red font"><strong>Barra Recheada</strong></span>
            <img class="chocolate" src="../../img/chocolate.png" alt="choco">
        </div>

        <div class="d-flex flex-sm-column flex-md-row m-auto justify-content-around px-2">
            <div class="card-compra rounded-3 col-md-4 col-6">
                <div class="d-flex flex-row-reverse pe-2 pt-2"><a href=""><div class="icon-cart"><box-icon size="sm" name='cart' ></box-icon></div></a></div>
                <div class="m-auto text-center"><img class="rounded-3 col-9" src="../../img/barra-chocolate.png" alt=""></div>
                <div class="my-2 f-w px-3 px-md-5  text-center"><span><strong>Barra de Chocolate com Creme de Avelã</strong></span></div>
                <div class="bg-white px-4 py-1 col-8 m-auto text-center mb-3"><span><strong>R$25,00</strong></span></div>
            </div>

    
    </div>

    
    <div class="text-center mt-5 d-flex justify-content-between align-items-center px-2">
        <img class="ms-5 chocolate" style="transform: scaleX(-1)" src="../../img/bolo.png" alt="choco">
        <span class="f-80 f-red font"><strong>Bolos</strong></span>
        <img class="me-5 chocolate" src="../../img/bolo.png" alt="choco">
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

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>