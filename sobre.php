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
                            <a href="produto.pho" class="PRT">Produtos</a>
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

    <main>




        <section class="campoBuscar2 ">
            <h1 class=" wow animate__animated animate__fadeInUp">Celebre momentos com as melhores bebidas</h1>
            <div class=" input1 wow animate__animated animate__fadeInUp">
                <input type="text" placeholder="🔍     Tente procurar por: cerveja, vinho, whiskey, energético... ">
                
                
            </div>
        </section>

    </main>

    <?php require_once('conteudo/rodape.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="./js/script.js"></script>


</body>

</html>