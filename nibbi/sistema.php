<?php
session_start();
//print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    // header('Location: login.php');
    @$logado = $_SESSION['email'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title> Nibbi </title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/grandelogo.png">
</head>

<body>

    <!-- header -->
    <header class="container-fluid">
        <!-- container -->
        <section class="container">
            <!-- row -->
            <article class="row d-flex align-items-center">

                <!-- logo -->
                <a href="./" class="col-md-2 d-flex justify-content-center">
                    <img src="./assets/images/medialetra.png" class="img-fluid" alt="Logo da empresa - Loja Nibbi">
                </a>

                <!-- buscador -->
                <form action="#" class="col-md-7 d-flex align-items-center">
                    <input type="text" name="name" placeholder="Procurar">

                    <button class="d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                    </button>
                </form>

                <!-- administrativo do cliente -->
                <ul class="col-md-3 nav d-flex align-items-center justify-content-around">
                    <li class="nav-item">
                        <a href="#">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>

                            <a href="sair.php"> Sair </a>

                        </a>
                    </li>

                    <li class="nav-item">
                        <span class="notificacao d-flex align-items-center justify-content-center">3</span>
                        <a href="#">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            Carrinho
                        </a>
                    </li>
                </ul>
                <!-- end administrativo do cliente -->

            </article>
            <!-- row -->
        </section>
        <!-- end container -->
    </header>
    <!-- end header -->

    <!-- menu do site -->
    <nav class="container-fluid nav-produtos">
        <!-- container -->
        <section class="container">
            <!-- menu -->
            <ul class="nav">
                <!-- lista de itens -->
                <li class="col-xl-2 col-lg-3 col-md-12 nav-item d-flex align-items-center">
                    <!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg> -->
                    Joias

                    <!-- submenu -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#">
                                Lançamentos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                Anéis
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                Alianças
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                Colares
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                Pulseiras
                            </a>
                        </li>
                    </ul>
                    <!-- end submenu -->
                </li>
                <!-- lista de itens -->
                <li class="col-xl-2 col-lg-3 col-md-12 nav-item d-flex align-items-center">
                    <!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg> -->
                    Masculino

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#">
                                Anéis
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                Relógios
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                Óculos de Sol
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- menu -->
        </section>
        <!-- end container -->
    </nav>
    <!-- end menu do site -->

    <!-- main -->
    <main>
        <!-- banners promocionais rotativos  -->

        <!-- end banners promocionais com 6 colunas -->
        <section class="container banners-promocionais-statico">
            <!-- row -->
            <section class="row">
                <!-- banner -->
                <article class="col-md-6">
                    <div class="banners-promocionais-statico-12x d-flex align-items-center">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                        </svg>

                        <p>
                            Parcele em até<br>
                            <strong>10x sem juros</strong>
                        </p>
                    </div>
                </article>

                <!-- banner -->
                <!-- container produtos -->
                <section class="container produtos">
                    <!-- title -->
                    <h1 class="text-center">Mais Vendidos</h1>

                    <!-- listagem dos produto s -->
                    <article class="row">

                        <!-- produtos -->
                        <a href="#" class="produtos-container col-md-3">
                            <!-- imagem do produto -->
                            <img src="./assets/images/pingente-ouro.jpg" class="img-fluid" alt="pingente-ouro">

                            <!-- itens do produto -->
                            <article class="produtos-itens">
                                <!-- title produto -->
                                <h2> Pingente de Ouro - Coração </h2>

                                <!-- stars -->
                                <div class="produtos-stars">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>

                                <!-- preco -->
                                <strong class="produtos-preco">
                                    R$2.890,00
                                </strong>
                            </article>
                            <!-- end itens do produto -->
                        </a>
                        <!-- end produtos -->

                        <!-- produtos -->
                        <a href="joiaCoracao.html" class="produtos-container col-md-3">
                            <!-- imagem do produto -->
                            <img src="./assets/images/pingente-rose.jpg" class="img-fluid" alt="pingente-rose">

                            <!-- itens do produto -->
                            <article class="produtos-itens">
                                <!-- title produto -->
                                <h2> Pingente Rosê - Coração </h2>

                                <!-- stars -->
                                <div class="produtos-stars">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>

                                <!-- preco -->
                                <strong class="produtos-preco">
                                    R$1.091,90
                                </strong>
                            </article>
                            <!-- end itens do produto -->
                        </a>
                        <!-- end produtos -->

                        <!-- produtos -->
                        <a href="#" class="produtos-container col-md-3">
                            <!-- imagem do produto -->
                            <img src="./assets/images/pingente-triangulo-diamante.jpg" class="img-fluid" alt="pingente-triangulo-diamante">

                            <!-- itens do produto -->
                            <article class="produtos-itens">
                                <!-- title produto -->
                                <h2> Colar Triangular Diamante </h2>

                                <!-- stars -->
                                <div class="produtos-stars">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>

                                <!-- preco -->
                                <strong class="produtos-preco">
                                    R$3.900,90
                                </strong>
                            </article>
                            <!-- end itens do produto -->
                        </a>
                        <!-- end produtos -->

                        <!-- produtos -->
                        <a href="#" class="produtos-container col-md-3">
                            <!-- imagem do produto -->
                            <img src="./assets/images/pingente-triangulo.jpg" class="img-fluid" alt="pingente-triangulo">

                            <!-- itens do produto -->
                            <article class="produtos-itens">
                                <!-- title produto -->
                                <h2> Pingente Triangular </h2>

                                <!-- stars -->
                                <div class="produtos-stars">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>

                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                </div>

                                <!-- preco -->
                                <strong class="produtos-preco">
                                    R$ 2.999,90
                                </strong>
                            </article>
                            <!-- end itens do produto -->
                        </a>
                        <!-- end produtos -->

                    </article>
                    <!-- listagem dos produtos -->

                    <div class="d-flex justify-content-center">
                        <a href="./joias.html" class="btn btn-warning col-md-2"> VEJA MAIS</a>
                    </div>
                </section>
                <!-- end container produtos -->
    </main>
    <!-- end main -->

    <!-- Footer -->
    <footer class="container-fluid">
        <!-- container -->
        <section class="container">
            <!-- menus -->
            <section class="row">
                <!-- atendimento -->
                <article class="col-md-4">
                    <h4>
                        Atendimento
                    </h4>
                    <!-- links -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="tel:+5544999999999">(44) 9 9999 9999</a>
                        </li>

                        <li class="nav-item">
                            <a href="mailto:contato@sualoja.com.br">contato@lojanibbi.com.br</a>
                        </li>

                        <li class="nav-item">
                            Horário de atendimento: Segunda à Sexta das 9:00 até as 20:30h
                        </li>
                    </ul>
                </article>
                <!-- end atendimento -->

                <!-- acesso rápido -->
                <article class="col-md-3">
                    <h4>
                        Acesso rápido
                    </h4>
                    <!-- links -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#">Minha Conta</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Meus Pedidos</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Rastrear</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Contate-nos</a>
                        </li>
                    </ul>
                </article>
                <!-- end acesso rápido -->

                <!-- institucional -->
                <article class="col-md-3">
                    <h4>
                        Institucional
                    </h4>
                    <!-- links -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#">Sobre a NIBBI</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Politica e Privacidade</a>
                        </li>
                    </ul>
                </article>
                <!-- end institucional -->

                <!-- mais acessadas -->
                <article class="col-md-2">
                    <h4>
                        Atendimento ao Cliente
                    </h4>
                    <!-- links -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#">Troca ou Devolução</a>
                        </li>

                        <li class="nav-item ellipsis">
                            <a href="#"> Métodos de Pagamentos</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Guia de Tamanhos</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">NIBBI VIP</a>
                        </li>
                    </ul>
                </article>
                <!-- end mais acessadas -->
            </section>
            <!-- end menus -->
        </section>
        <!-- end container -->

    </footer>
    <!-- end Footer-->

    <!-- Arquivos Bootstrap -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/popper.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
</body>

</html>