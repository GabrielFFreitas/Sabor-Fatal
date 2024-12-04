<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festas</title>
    <?php include '../includes/head.php' ?>
    <link rel="stylesheet" href="../style/festas.css">
</head>

<body>
    <?php include '../includes/header.php' ?>

    <div class="background-festas">
        <div class="tittle-1">
            <span class="f-w f-80 font">Celebre com Sabor Fatal</span>
        </div>
    </div>

    <div class="col-10 col-md-5 m-auto">
        <div class="planos-tittle">
            <span class="f-60 font "><strong>Planos e Preços</strong></span>
        </div>

        <div class="g-card">
            <div class="d-flex flex-row-reverse"><box-icon size="md" name='circle'></box-icon></div>
            <div class="text-center card-tittle"><span class="f-40"><strong>Básico</strong></span></div>
            <div class="f-20">
                <ul>
                    <li><strong>Descrição:</strong> Ideal para pequenas celebrações, o plano básico oferece uma seleção
                        de doces clássicos com sabores exclusivos.</li>
                    <li><strong>Inclui:</strong></br>
                        ⤷ 20 cupcakes variados </br>
                        ⤷ 15 trufas finas (sabores à escolha)</br>
                        ⤷ 10 mini tortas (escolha entre chocolate, frutas </br>
                        vermelhas ou limão)</br>
                        ⤷ 1 bolo de 1,5 kg (escolha entre Red Velvet, chocolate
                        amargo ou limão siciliano)</li>
                    <li><strong>Preço:</strong> R$ 450,00</li>
                    <li><strong>Extras Opcionais:</strong></br>
                        ⤷ Brigadeiros gourmet (10 unidades) por R$ 25,00</br>
                        ⤷ Decoração personalizada (a partir de R$ 50,00)</li>
                </ul>
            </div>
        </div>

        <div class="g-card">
            <div class="d-flex flex-row-reverse"><box-icon size="md" name='circle'></box-icon></div>
            <div class="text-center card-tittle"><span class="f-40"><strong>Intermediário</strong></span></div>
            <div class="f-20">
                <ul>
                    <li><strong>Descrição:</strong> Esse plano oferece uma experiência mais completa, ideal para festas
                        de médio porte, com uma maior variedade de doces e uma decoração especial.</li>
                    <li><strong>Inclui:</strong></br>
                        ⤷ 30 cupcakes personalizados (sabores variados)</br>
                        ⤷ 25 trufas finas</br>
                        ⤷ 20 mini tortas</br>
                        ⤷ 2 bolos de 1,5 kg (escolha de sabores)</br>
                        ⤷ 50 brigadeiros gourmet (variados)</li>
                    <li><strong>Preço:</strong> R$ 850,00</li>
                    <li><strong>Extras Opcionais:</strong></br>
                        ⤷ Donuts personalizados (10 unidades) por R$ 35,00</br>
                        ⤷ Barra recheada de chocolate para lembrancinhas (10 unidades) por R$ 100,00</br>
                        ⤷ Mousse em potes individuais (10 unidades) por R$ 120,00</li>
                </ul>
            </div>
        </div>

        <div class="g-card-premium">
            <div class="d-flex flex-row-reverse"><box-icon size="md" name='circle'></box-icon></div>
            <div class="text-center card-tittle"><span class="f-40"><strong>Premium</strong></span></div>
            <div class="f-20">
                <ul>
                    <li><strong>Descrição:</strong> Nosso plano mais completo, feito para grandes eventos, garantindo
                        que cada detalhe seja perfeito e todos os convidados sejam surpreendidos com a nossa seleção de
                        sabores.</li>
                    <li><strong>Inclui:</strong></br>
                        ⤷ 50 cupcakes variados e personalizados</br>
                        ⤷ 50 trufas finas e exclusivas (sabores premium)</br>
                        ⤷ 30 mini tortas variadas</br>
                        ⤷ 2 bolos de 3 kg cada (sabores à escolha)</br>
                        ⤷ 100 brigadeiros gourmet</br>
                        ⤷ 20 mousses individuais</br>
                        ⤷ Decoração temática e exclusiva para o evento</li>
                    <li><strong>Preço:</strong> R$ 1.500,00</li>
                    <li><strong>Extras Opcionais:</strong></br>
                        ⤷ Mesa de degustação de doces adicionais (R$ 300,00)</br>
                        ⤷ Personalização para festas corporativas (R$ 100,00)</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="planos">
        <div class="planos-tittle-2">
            <span class="font f-80">Cada plano inclui:</span>
        </div>
        <div class="d-flex flex-md-row flex-column justify-content-around px-5">
            <img class="img-planos" src="../../img/plano1.png" alt="">
            <img class="img-planos" src="../../img/plano2.png" alt="">
            <img class="img-planos" src="../../img/plano3.png" alt="">
        </div>
    </div>
    
    <div class="eventos">
        <div class="col-10 col-md-8 m-auto">
            <div class="d-flex justify-content-around mb-4">
                <img class="star" src="../../img/star.png" alt="">
                <span class="font f-w f-80">Eventos Passados</span>
                <img class="star" src="../../img/star.png" alt="">
            </div> 

            <div class="d-flex flex-column align-items-center">
                <img class="img-eventos" src="../../img/eventos1.png" alt="">
                <img class="img-eventos" src="../../img/eventos2.png" alt="">
                <img class="img-eventos" src="../../img/eventos3.png" alt="">
            </div>
        </div>
    </div>




    <?php include '../includes/footer.php' ?>
</body>

</html>