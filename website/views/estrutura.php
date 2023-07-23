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
                <div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">

                    <figure class="image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <a class="open" href="/website/img/estrutura/img1.png" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/estrutura/img1.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>
                    <figure class="image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <a class="open" href="/website/img/estrutura/img1.png" data-caption="Saaa side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/estrutura/img1.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>
                    <figure class="image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <a class="open" href="/website/img/estrutura/img1.png" data-caption="Saaa side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/estrutura/img1.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>
                </div>

            </div>
        </section>


        <?php
        include "_inc_footer.php";
        include "website/plugins/photoswipe/photoswipe.php";
        ?>
    </body>

    <script>
        'use strict';

        /* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */

        (function($) {
            // Init empty gallery array
            var container = [];

            // Loop over gallery items and push it to the array
            $('#gallery').find('figure').each(function() {
                var $link = $(this).find('.open'),
                    item = {
                        src: $link.attr('href'),
                        w: $link.data('width'),
                        h: $link.data('height'),
                        title: $link.data('caption')
                    };
                container.push(item);
            });

            // Define click event on gallery item
            $('.open').click(function(event) {
                // Prevent location change
                event.preventDefault();

                // Add class to header to hide it
                $('header').addClass('hide-header');

                // Define object and gallery options
                var $pswp = $('.pswp')[0],
                    options = {
                        index: $(this).parent('figure').index(),
                        bgOpacity: 0.85,
                        showHideOpacity: true
                    };

                // Initialize PhotoSwipe
                var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);

                // Close event - remove class to show the header again
                gallery.listen('close', function() {
                    $('header').removeClass('hide-header');
                });

                gallery.init();
            });
        }(jQuery));
    </script>


    </html>