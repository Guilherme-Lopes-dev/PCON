<?php
$pagina = "page_portfolio";
include "_inc_headers.php";
?>
<title>Portfólio</title>

</head>

<body id="<?php echo $pagina; ?>">

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
                <!-- Galley wrapper that contains all items -->
                <div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">
                    <!-- Use figure for a more semantic html -->
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <button class="btn-play" id="playBtn" data-bs-toggle="modal" data-bs-target="#dynamicVideoModal">
                            <img src="/website/img/portfolio/btn-play.png" alt="">
                        </button>
                        <a class="open" href="/website/img/portfolio/image3.png" data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/portfolio/image3.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <a class="open" href="/website/img/portfolio/image.png" data-caption="Saaa side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/portfolio/image.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <a class="open" href="/website/img/portfolio/image.png" data-caption="Saaa side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/portfolio/image.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>
                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                        <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
                        <a class="open" href="/website/img/portfolio/image3.png" data-caption="Saaa side, south shore<br><em class='text-muted'>© Dominik Schröder</em>" data-width="1200" data-height="900" itemprop="contentUrl">
                            <!-- Thumbnail -->
                            <img src="/website/img/portfolio/image3.png" itemprop="thumbnail" alt="Image description">
                        </a>
                    </figure>


                </div>

            </div>

            <!-- Some spacing 😉 -->
            <div class="spacer"></div>


            <!-- Root element of PhotoSwipe. Must have class pswp. -->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <!-- Background of PhotoSwipe. 
           It's a separate element as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>
                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">
                    <!-- Container that holds slides. 
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <!--  Controls are self-explanatory. Order can be changed. -->
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                            <!-- element will get class pswp__preloader--active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- modal -->
        <section class="video">
            <div class="modal fade app" id="dynamicVideoModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen modal-dialog-centered modal-xl">
                    <div class="modal-content at-container">
                        <div class="ratio ratio-4x3 at-item" id="player">
                        </div>
                    </div>
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