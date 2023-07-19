    <div id="myNav" class="overlay container-home">
        <div class="container-nav">
            <nav class="container-home navbar-desktop">
                <div class="navbar-brand">
                    <a href="/"><img src="website\img\header\logo.png" alt=""></a>
                </div>
                <div class="container-btns">
                    <div class="btn-desktop">

                        <a target="" href="">
                            <button class="btn fale">
                                <img class="icon" src="/website/img/header/icon_whatsapp.png" alt="">
                                Fale Conosco
                            </button>
                        </a>
                    </div>
                    <div class="btn-mobile">
                        <button class="openBtn" id="openBtn" onclick="toggleNav('close')">
                            <span class="line "></span>
                            <span class="line "></span>
                            <span class="line "></span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>

        <div class="overlay-content no-margin-padding">
            <a class="link <?= $pagina == 'home' ? 'active' : '' ?> " href="/">Home</a>
            <a class="link <?= $pagina == 'institucional' ? 'active' : '' ?>" href="/institucional">Institucional</a>
            <a class="link <?= $pagina == 'portfolio' ? 'active' : '' ?>" href="/portfolio">Portfólio</a>
            <a class="link <?= $pagina == 'servicos' ? 'active' : '' ?>" href="/servicos">Serviços</a>
            <a class="link <?= $pagina == 'estrutura' ? 'active' : '' ?>" href="/estrutura">Estrutura</a>
            <a class="link <?= $pagina == 'contato' ? 'active' : '' ?>" href="/contato">Contato</a>
            <div class="btn-nav-mobile no-margin-padding">
                <div>
                    <a target="" href="">
                        <button class="btn fale">
                            <img class="icon" src="/website/img/header/icon_whatsapp.png" alt="">
                            Fale Conosco
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header id="header">
        <nav class="container-home navbar-desktop">
            <div class="navbar-brand">
                <a href="/"><img src="website\img\header\logo.png" width="185px" height="42px" alt=""></a>
            </div>

            <div class="nav-items">
                <a class="link <?= $pagina == 'home' ? 'active' : '' ?> " href="/">Home</a>
                <a class="link <?= $pagina == 'institucional' ? 'active' : '' ?>" href="/institucional">Institucional</a>
                <a class="link <?= $pagina == 'portfolio' ? 'active' : '' ?>" href="/portfolio">Portfólio</a>
                <a class="link <?= $pagina == 'servicos' ? 'active' : '' ?>" href="/servicos">Serviços</a>
                <a class="link <?= $pagina == 'estrutura' ? 'active' : '' ?>" href="/estrutura">Estrutura</a>
                <a class="link <?= $pagina == 'contato' ? 'active' : '' ?>" href="/contato">Contato</a>
            </div>
            <div class="container-btns">
                <div class="btn-desktop">
                    <a target="" href="">
                        <button class="btn fale">
                            <img class="icon" src="/website/img/header/icon_whatsapp.png" alt="">
                            Fale Conosco
                        </button>
                    </a>
                </div>
                <div class="btn-mobile">
                    <button class="openBtn" id="openBtn" onclick="toggleNav('open')">
                        <span class="line "></span>
                        <span class="line "></span>
                        <span class="line "></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>