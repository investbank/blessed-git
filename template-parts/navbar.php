
        <header class="header_area">
            <nav class="navbar navbar-expand-lg menu_one menu_four">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="#"><img src="img/logo2.png" srcset="img/logo2.png 2x" alt="logo"><img src="img/logo.png" srcset="img/logo.png 2x" alt=""></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav menu w_menu">
                            <li class="nav-item dropdown submenu mega_menu mega_menu_two">
                                <a class="nav-link dropdown-toggle" href="header-dark.html#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown submenu mega_menu<?=iiF(currentPage(), 'portfolio', ' active', '')?>">
                                <a class="nav-link" href="portfolio.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Portfolio
                                </a>
                            </li>
                            <li class="nav-item dropdown submenu<?=iiF(currentPage(), 'servicos', ' active', '')?>">
                                <a class="nav-link dropdown-toggle" href="servicos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Serviços
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="desenvolvimento-de-sites.php" class="nav-link active">Desenvolvimento de Sites</a></li>
                                    <li class="nav-item"><a href="otimizacao-de-sites.php" class="nav-link">Otimização de Sites</a></li>
                                    <li class="nav-item"><a href="marketing-patrocinado.php" class="nav-link">Marketing Patrocinado</a></li>
                                    <li class="nav-item"><a href="gestao-midias-sociais.php" class="nav-link">Gestão de Mídias Sociais</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown submenu<?=iiF(currentPage(), 'sobre-nos', ' active', '')?>">
                                <a class="nav-link dropdown-toggle" href="sobre-nos.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sobre Nós
                                </a>
                            </li>
                            <li class="nav-item<?=iiF(currentPage(), 'fale-conosco', ' active', '')?>">
                                <a class="nav-link" href="fale-conosco.php" role="button" aria-haspopup="true" aria-expanded="false">
                                    Fale Conosco
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
