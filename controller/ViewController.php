<?php
    class ViewController {
        public static function getHead(){
            echo('
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
                <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
                <link rel="stylesheet" href="assets/css/styles.css">
                <title>Dev.Watch</title>
            </head>
            ');
        }

        public static function getHeader(){
            echo('
            <header class="header" id="header">
                <nav class="nav container">
                    <a href="#" class="nav__logo"><i class="bx bxs-watch nav__logo-icon"></i> Dev.Watch</a>

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="#home" class="nav__link active-link">Inicio</a></li>
                            <li class="nav__item"><a href="#quemsomos" class="nav__link">Sobre nós</a></li>
                            <li class="nav__item"><a href="#produtos" class="nav__link">Produtos</a></li>
                            <li class="nav__item"><a href="#comentario" class="nav__link">Comentários</a></li>
                        </ul>

                        <div class="nav__close" id="nav-close"><i class="bx bx-x" ></i></div>
                    </div>

                    <div class="nav__btns">
                        
                        <a class="nav__shop" href="login.html"><i class="bx bx-user"></i></a>
                        <div class="nav__shop"  id="cart-shop"><a href="carrinho/cart.php" class="nav__shop"><i class="bx bx-shopping-bag"></i></a></div>
                        <div class="nav__toggle" id="nav-toggle"><i class="bx bx-grid-alt"></i></div>
                    </div>

                </nav>
            </header>    
            ');
        }
        public static function getFooter(){
            echo('
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <h3 class="footer__title">Endereço</h3>

                        <ul class="footer__list">
                            <li>São Paulo - Brasil</li>
                            <li>Av. Don Corleone, 344</li>
                            <li>123-456-789</li>
                            <li>devwatch@gmail.com</li>
                        </ul>
                    </div>
                    <div class="footer__content">
                        <h3 class="footer__title">Informações</h3>

                        <ul class="footer__links">
                            <li><a href="#" class="footer__link">Razão Social</a></li>
                            <li><a href="#" class="footer__link">Suporte Personalizado</a></li>
                            <li><a href="#" class="footer__link">Trabalhe Conosco</a></li>
                            <li><a href="#" class="footer__link">Politica de Privacdade</a></li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Loja</h3>

                        <ul class="footer__links">
                            <li><a href="#home" class="footer__link">Inicio</a></li>
                            <li><a href="#recomendados" class="footer__link">Sobre nós</a></li>
                            <li><a href="#produtos" class="footer__link">Produtos</a></li>
                            <li><a href="#lancamentos" class="footer__link">Comentários</a></li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Admin</h3>

                        <ul class="footer__links">
                            <li><a href="admin-login.html" class="footer__link">Login</a></li>

                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Kaique Souza, Henry Modesto, Miguel Santos, Bruna Karen, Kauan Gabriel, Kaio Hergesel.</span>
            </footer>
            ')


    }
?>