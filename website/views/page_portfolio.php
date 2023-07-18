<?php
$pagina = "page-portfolio";
include "_inc_headers.php";
?>
<title>Portfólio</title>

<body id="<?php echo $pagina; ?>">
    </head>

    <body id="<?php echo $pagina; ?>">
        <?php
        include "_inc_header.php";
        ?>
        <section class="banner" style="">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Home </a>
                    <span> > </span>
                    <span>Portfólio</span>
                    <span> > </span>
                    <span>Atacadão Rio das Ostras</span>
                </div>
            </div>
            <div class="info">
                <div class="text">
                    <p class="nmp red">
                        Rio de janeiro
                    </p>
                    <p class="nmp black">
                        Rio das Ostras
                    </p>
                </div>
            </div>

        </section>

        <section class="content">
            <div class="container">
                <div class="left">
                    <p class="nmp p-black">Atacadão Rio das Ostras</p>
                    <p class="nmp p-grey">Estrada Professor Faria Sarzedas, s/n – Atlântica Rio das Ostras/RJ</p>
                </div>
                <div class="right">
                    <p class="nmp p-black">Área construída</p>
                    <p class="nmp p-red">11.559,34m²</p>
                </div>
            </div>
        </section>

        <section class="images">
            <div class="container">
                <div class="image video ">
                    <img src="/website/img/portfolio/image.png" alt="">
                </div>
                <div class="image">
                    <img src="/website/img/portfolio/image2.png" alt="">
                </div>
                <div class="image">
                    <img src="/website/img/portfolio/image3.png" alt="">
                </div>
                <div class="image">
                    <img src="/website/img/portfolio/image2.png" alt="">
                </div>
                <div class="image ">
                    <img src="/website/img/portfolio/image3.png" alt="">
                </div>
                <div class="image">
                    <img src="/website/img/portfolio/image3.png" alt="">
                </div>
                <div class="image">
                    <img src="/website/img/portfolio/image3.png" alt="">
                </div>
            </div>
        </section>


        <?php
        include "_inc_footer.php";
        include "website/plugins/photoswipe/photoswipe.php";
        ?>
    </body>


    </html>