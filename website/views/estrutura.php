<?php
$pagina = "estrutura";
include "_inc_headers.php";
?>
<title>Estruturas</title>

<body id="<?php echo $pagina; ?>">
    </head>

    <body id="<?php echo $pagina; ?>">
        <?php
        include "_inc_header.php";
        ?>
        <section class="journal">
            <img src="/website/img/estrutura/top-banner.png" alt="" class="top-banner">
            <img src="/website/img/estrutura/top-banner-mobile.png" alt="" class="top-banner-mobile">

            <div class="container">
                <div class="text">
                    <h3>estrutura</h3>
                    <p class="nmp">Sua obra com os equipamentos mais modernos e seguros</p>
                </div>
                <div class="journal-img">
                    <img class="img-desktop" src="/website/img/estrutura/estrutura.png" alt="">
                    <img src="/website/img/estrutura/estrutura-mobile.png" alt="" class="img-mobile">
                </div>
            </div>
        </section>

        <section class="texts">
            <div class="container">
                <div class="left">
                    <p class="nmp red">Nossos equipamentos são selecionados criteriosamente, levando em consideração os mais altos padrões de qualidade e inovação.</p>
                    <p class="nmp grey">Na PCON, temos um compromisso inabalável com a segurança em todas as nossas obras de construção. Para garantir a tranquilidade e proteção de nossos clientes, utilizamos o que há de mais moderno em equipamentos. Investimos constantemente em tecnologia de ponta, pois sabemos que a segurança é um elemento fundamental em qualquer projeto de construção. </p>
                </div>
                <div class="right">
                    <p class="nmp grey">
                        Contamos com uma variedade de equipamentos modernos e avançados, desde maquinário pesado até ferramentas de precisão. Esses recursos nos permitem otimizar processos, aumentar a eficiência e, acima de tudo, garantir a segurança dos nossos colaboradores e clientes. Além disso, nossa equipe é constantemente treinada e atualizada para utilizar esses equipamentos de forma adequada e segura. Realizamos rigorosos controles de manutenção, assegurando que todos os equipamentos estejam em perfeitas condições de funcionamento antes de serem utilizados em nossos projetos.
                    </p>
                </div>
            </div>
        </section>

        <section class="images">
            <div class="container">
                <div class="image">
                    <img class="" src="/website/img/estrutura/img1.png" alt="">
                </div>
                <div class="image">
                    <img class="" src="/website/img/estrutura/img2.png" alt="">
                </div>
                <div class="image">
                    <img class="" src="/website/img/estrutura/img3.png" alt="">
                </div>
            </div>
        </section>


        <?php
        include "_inc_footer.php";
        include "website/plugins/photoswipe/photoswipe.php";
        ?>
    </body>


    </html>