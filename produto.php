<?php

$pagina = @$_GET['p'];

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsivo.css">
    <title>Adega do Cleitinho- Home</title>
</head>

<body>

    <body>
        <header>
            <div class="site">
                <div class="header ">
                    <div class="logoTamanho  wow animate__animated animate__fadeInUp">
                        <img class=" wow animate__animated animate__fadeInUp" src="./img/logo.png" alt="">
                    </div>

                    <button class="abrirMenu"></button>
                    <nav class="menu">

                        <button class="fecharMenu"></button>
                        <ul>
                            <li>
                                <a href="home.php">Home</a>
                            </li>
                            <li>
                                <a href="sobre.php">Sobre</a>
                            </li>

                            <li>
                                <a href="produto.php?p=Cervejas" class="PRT">Produtos</a>
                            </li>
                            <li>
                                <a href="contato.php">Contato</a>
                            </li>
                        </ul>

                        <div class="user">
                            <img class=" wow animate__animated animate__fadeInUp" src="./img/user.png" alt="">
                        </div>
                    </nav>

                    <div class="user2">
                        <img class=" wow animate__animated animate__fadeInUp" src="./img/user.png" alt="">
                    </div>

                </div>
            </div>
        </header>

        <section class="campoBuscar3 ">
            <div class=" input2 wow animate__animated animate__fadeInUp">
                <input type="text" placeholder="🔍     Tente procurar por: cerveja, vinho, whiskey, energético... ">
            </div>
            <div class="carro wow animate__animated animate__fadeInUp">
                <div>
                    <h2 class="text-center"> <span id="totalValue">$ 0,00</span></h2>
                    <img src="./img/carrinho.png" alt="">
                </div>

            </div>

        </section>

        <main class="duplo">
            <aside>

                <a href="produto.php?p=Cervejas"class="<?php echo (@$_GET['p'] == 'Cervejas') ? 'menuAtivo' : ''; ?>">Cervejas</a>

                <a href="produto.php?p=Alcoólicas"class="<?php echo (@$_GET['p'] == 'Alcoólicas') ? 'menuAtivo' : ''; ?>">Alcoólicas</a>

                <a href="produto.php?p=Vinhos" class="<?php echo (@$_GET['p'] == 'Vinhos') ? 'menuAtivo' : ''; ?>">Vinhos</a>

                <a href="produto.php?p=Energéticos"class="<?php echo (@$_GET['p'] == 'Energéticos') ? 'menuAtivo' : ''; ?>">Energéticos</a>

                <a href="produto.php?p=Sucos"class="<?php echo (@$_GET['p'] == 'Sucos') ? 'menuAtivo' : ''; ?>">Sucos</a>

                <a href="produto.php?p=Gelos"class="<?php echo (@$_GET['p'] == 'Gelos') ? 'menuAtivo' : ''; ?>">Gelos</a>

            </aside>

            <div class="box">


                <!-- CONTEÚDO DAS PÁGINAS -->

                <?php

                switch ($pagina) {

                    case 'Energéticos':

                        require_once('produtos/energeticos.php');

                        break;

                    case 'Sucos':

                        require_once('produtos/sucos.php');

                        break;


                    case 'Gelos':

                        require_once('produtos/gelos.php');

                        break;

                    case 'Alcoólicas':

                        require_once('produtos/alcoolicas.php');

                        break;

                    case 'Cervejas':

                        require_once('produtos/cervejas.php');

                        break;

                    case 'Vinhos':

                        require_once('produtos/vinhos.php');

                        break;
                }

                ?>
            </div>


        </main>



        <?php require_once('conteudo/rodape.php'); ?>

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="./js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>

        <script src="./js/script.js"></script>


    </body>

</html>