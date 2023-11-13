<!DOCTYPE html>
<html data-wf-domain="www.metasoftco.com" data-wf-page="63bec85cdf3bef6711d95e92" data-wf-site="6384adc4346ef2fe20a7f69b" data-wf-status="1">

<head>
    <?php echo view("layouts/head.php"); ?>
    <title>News + Updates | Metasoftco</title>
    <meta content="The latest and greatest articles about happenings at Metasoftco. In other words, the news that we tell our moms." name="description">
    <meta content="News + Updates | Metasoftco" property="og:title">
    <meta content="All the latest and greatest news articles about Metasoftco." property="og:description">
    <meta content="https://global-uploads.webflow.com/6384adc4346ef2fe20a7f69b/6399c542280cfcf8a303ab12_Opengraph.png" property="og:image">
    <meta content="News + Updates | Metasoftco" property="twitter:title">
    <meta content="All the latest and greatest news articles about Metasoftco." property="twitter:description">
    <meta content="https://global-uploads.webflow.com/6384adc4346ef2fe20a7f69b/6399c542280cfcf8a303ab12_Opengraph.png" property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">

    <link href="/static/style.css" rel="stylesheet" type="text/css">
    <style>
        @media (min-width:992px) {
            html.w-mod-js:not(.w-mod-ix) [data-w-id="ded674c7-7d1b-3d45-e217-fecdcbd0fb42"] {
                opacity: 1;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="ded674c7-7d1b-3d45-e217-fecdcbd0fb41"] {
                background-color: rgb(255, 255, 255);
            }
        }
    </style>

    <!-- Please keep this css code to improve the font quality-->
    <style>
        .w-webflow-badge {
            display: none !important;
        }

        * {
            outline: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #383737;
            background-image: url("63285965f554791ee9971f97/632964cdaf732278e755cafb_Noise.webp");
            background-position: 0px 0px;
            background-size: 50px;
        }

        ::-webkit-scrollbar-thumb {
            background: #FB3E2D;
            border-radius: 10px;
        }

        .remodal-overlay {
            background: rgba(56, 55, 55, 0.64)
        }

        .remodal-wrapper {
            overflow: hidden;
            padding: 0;
        }

        .cursor__wrapper {
            pointer-events: none;
        }

        input::-webkit-input-placeholder {
            transition: .2s;
        }

        input:-moz-placeholder {
            transition: .2s;
        }

        input::-moz-placeholder {
            transition: .2s;
        }

        input:-ms-input-placeholder {
            transition: .2s;
        }

        input:focus:-ms-input-placeholder {
            opacity: 0;
        }

        input:focus::-moz-placeholder {
            opacity: 0;
        }

        input:focus:-moz-placeholder {
            opacity: 0;
        }

        input:focus::-webkit-input-placeholder {
            opacity: 0;
        }
    </style><!-- [Attributes by Finsweet] CMS Filter -->
    <style>
        .fs-cmsfilter_active {
            background: #A79CEE;
        }
    </style>
</head>

<body>
    <?php echo view("layouts/body-top.php"); ?>

    <div class="page-wrap">

        <?php echo view("layouts/header.php"); ?>
        <main class="main">
            <div id="hero" class="section mod--grey">
                <div class="content mod--flex mod--mobvertical">
                    <div class="col mod--latest">
                        <h6 class="subtitleh6--puprle">Son</h6>
                        <h2 class="mod--color">Blog Yazıları</h2>
                    </div>
                    <!-- <div class="col mod--sizing">
                                <h6 class="filter__title mod--latest">FİLTRELE</h6>
                                <div fs-cmsfilter-element="filters" class="category-form-block w-form">
                                    <form id="email-form" name="email-form" data-name="Email Form" method="get"
                                        class="category-form">
                                        <div class="category-wrapper w-dyn-list">
                                            <div role="list" class="category-list w-dyn-items">
                                                <div role="listitem" class="collection-item w-dyn-item"><label
                                                        class="w-checkbox c_cat-text-wrap"><input type="checkbox"
                                                            id="checkbox" name="checkbox" data-name="Checkbox"
                                                            class="w-checkbox-input checkbox__filter"><span
                                                            fs-cmsfilter-field="category"
                                                            class="category__text w-form-label" for="checkbox">Yapay
                                                            Zeka</span></label></div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                </div>
            </div>

            <div class="section mod--grey mod--2">

                <div class="content mod--news">
                    <div class="news-wrapper w-dyn-list">
                        <div id="blogPostWrapper" fs-cmsload-mode="load-under" fs-cmsfilter-element="list" fs-cmsload-element="list" role="list" class="news-list w-dyn-items">
                            <!-- BLOG POSTS -->
                            <?php foreach ($blogs as $blog) : ?>
                                <div role="listitem" class="news w-dyn-item"><a data-w-id="51b30292-b908-dea2-7f77-b97ba7d54ed2" href="/bloglar/<?php echo $blog->slug; ?>" class="news-link anim--preloader w-inline-block"><img src="/blog/<?php echo $blog->img; ?>" loading="lazy" alt="" sizes="(max-width: 479px) 80vw, (max-width: 767px) 343px, 29vw" class="news-img">
                                        <div class="news__date">
                                            <?php echo $blog->createdAt; ?>
                                        </div>
                                        <h6 class="news__title">
                                            <?php echo $blog->title; ?>
                                        </h6>
                                    </a>
                                    <div class="category-wrapper w-dyn-list">
                                        <div role="list" class="category-list mod--2 w-dyn-items">
                                            <?php foreach ($blog->tags as $tag) : ?>
                                                <div role="listitem" class="category-item w-dyn-item">
                                                    <div fs-cmsfilter-field="category" class="category__text">
                                                        <?php echo $tag; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;
                            ?>


                        </div>
                        <!-- <div fs-cmsfilter-element="empty" class="empty__message mod--black">
                                    <div class="text-block">Sonuç bulunamadı!</div>
                                </div> -->
                    </div>
                </div>
                <section class="section mod--moto">
                    <div class="content">
                        <div class="content_col mod--moto"><img src="/6384adc4346ef2fe20a7f69b/63aadb4df3af997d4968f080_moon__gif.gif" loading="lazy" alt="" class="compos__img mod--moto5 mod--moon">
                            <h2 class="mod--moto">BİRLİKTE ÇALIŞABİLİRİZ!
                            </h2>
                        </div>
                        <!-- <div class="subtitle mod__sub-moto">BİRLİKTE HARİKA İŞLER YAPABİLİRİZ.</div> --><a href="contact-us" class="link_wrapper w-inline-block">
                            <div>İLETİŞİM</div>
                        </a>
                    </div><a data-w-id="ab16094a-430e-d6fb-d155-bab035055ad2" href="contact-us" class="compos-wrapper mod--moto anim--preloader w-inline-block"><img src="/6384adc4346ef2fe20a7f69b/63a2e5b60a748d264a87ac1f_people.svg" loading="lazy" compos-img-anim="" alt="" class="compos__img mod--moto1"><img src="/6384adc4346ef2fe20a7f69b/63a2e6bcfa137f63f83ffc2f_eyes_moto.svg" loading="lazy" compos-img-anim="" alt="" class="compos__img mod--moto2"><img src="/6384adc4346ef2fe20a7f69b/63a5ac0f3947afd69c9853f6_peace__hand.svg" loading="lazy" compos-img-anim="" alt="" class="compos__img mod--moto3"><img src="/6384adc4346ef2fe20a7f69b/63a2ebfdddd319d6db2e10c1_speaker_big.svg" loading="lazy" compos-img-anim="" alt="" class="compos__img mod--moto4"></a>
                </section>
        </main>
        <?php echo view("layouts/footer.php"); ?>
        <div class="cursor__wrapper">
            <div class="cursor mod--width100">
                <div class="button mod--project mod--play"></div>
                <div class="button mod--project mod--absolute">İLETİŞİM</div>
                <div class="button mod--project mod--learn mod--color">Daha Fazla</div>
            </div>
        </div>
    </div>
    <?php echo view("layouts/contact-modal.php"); ?>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/index.js" type="text/javascript"></script>
    <script src="/6384adc4346ef2fe20a7f69b/js/webflow.b68c1dd84.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    <script src="/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" type="text/javascript"></script>
    <script src="/ajax/libs/remodal/1.1.1/remodal.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.REMODAL_GLOBALS = {
            DEFAULTS: {
                hashTracking: false
            }
        };
    </script>
    <script>
        SmoothScroll({
            animationTime: 800, // [ms]
            stepSize: 100, // [px]
            accelerationDelta: 50, // 50
            accelerationMax: 3, // 3
            touchpadSupport: false,
        });

        // left: 37, up: 38, right: 39, down: 40,
        // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
        var keys = {
            37: 1,
            38: 1,
            39: 1,
            40: 1
        };

        function preventDefault(e) {
            e.preventDefault();
        }

        function preventDefaultForScrollKeys(e) {
            if (keys[e.keyCode]) {
                preventDefault(e);
                return false;
            }
        }
        // modern Chrome requires { passive: false } when adding event
        var supportsPassive = false;
        try {
            window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
                get: function() {
                    supportsPassive = true;
                }
            }));
        } catch (e) {}
        var wheelOpt = supportsPassive ? {
            passive: false
        } : false;
        var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';
        // call this to Disable
        function disableScroll() {
            window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
            window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
            window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
            window.addEventListener('keydown', preventDefaultForScrollKeys, false);
        }
        // call this to Enable
        function enableScroll() {
            window.removeEventListener('DOMMouseScroll', preventDefault, false);
            window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
            window.removeEventListener('touchmove', preventDefault, wheelOpt);
            window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
        }

        if (window.innerWidth <= 767) {
            $(".col.mod--menu_btn, .nav__link-wrap.mod--menu, .sub_nav-link, .menu_link").on('click', function() {
                let body = $('body').attr("data-menu")
                $('.col.mod--menu_btn').toggleClass('active')
                $('.col.col--2.mod--header').toggleClass('open')

                if (!body == 'open' || body == undefined) {
                    $('html, body').attr('data-menu', 'open');
                    disableScroll();
                } else {
                    $('html, body').removeAttr('data-menu');
                    enableScroll();
                }
            });
        }

        //hero/footer btn scroll
        $(function() {
            $('.btn_scroll').on('click', function(e) {
                $('html,body').stop().animate({
                    scrollTop: $('#projects').offset().top
                }, 1000);
                e.preventDefault();
            });
        });
        $(function() {
            $('.btn_scroll-up').on('click', function(e) {
                $('html,body').stop().animate({
                    scrollTop: 0
                }, 2000);
                e.preventDefault();
            });
        });


        /// links block carusel    
        $(() => {
            $(".links_list").each(function() {
                let linksItem = $(this).children();
                let linksList = $(".links_list-item").parent(".links_list");

                let i = 0;
                while (i < 35) {
                    i++;
                    $(linksItem).clone().appendTo(this);
                }

                if (window.innerWidth <= 767) {
                    function loop() {
                        $(linksList).css({
                            right: 0
                        });
                        $(linksList).animate({
                            right: '-9000',
                        }, 350000, 'linear', function() {
                            loop();
                        });
                    }
                    loop();
                } else {
                    $('.links_block').each(function() {
                        $(this).hover(function() {
                            let links_list = $(this).children('.links_list')
                            let offset = $(links_list).offset()
                            $(links_list).animate({
                                right: '-8500'
                            }, 50000, 'linear')

                            if (offset.left > 0) {
                                $(links_list).css('right', '0px');
                                console.log('done')
                            }
                        }, function() {
                            $('.links_list').stop(true, false);
                        });
                    });
                }
            });
        });

        /// modal form
        $('[data-form=modal-form]').click(function() {
            var form = $(this).parents('form');
            form.submit(function(e) {
                let formSubmitted = $(e.target);
                console.log(formSubmitted)
                $('.remodal_col.mod--1').css('max-height', '0rem');
                $('.remodal_col.mod--2').css('max-height', '20rem');
                $('.remodal_col.mod--2').css('opacity', '1');
                setTimeout(function() {
                    $(formSubmitted).find('input:not(:submit)').val('');
                    $(formSubmitted).find('textarea:not(:submit)').val('');
                }, 100);
                setTimeout(() => {
                    $('.remodal_col.mod--1').css('max-height', '45rem');
                    $('.remodal_col.mod--2').css('max-height', '0rem');
                    $('.remodal_col.mod--2').css('opacity', '0');
                }, 10000);
            });
        })

        // animation preloader
        $(".anim--preloader").on('click', function(e) {
            e.preventDefault()
            var link = this.getAttribute("href");
            setTimeout(function() {
                window.location.href = link;
            }, 800);
        });
    </script>
    <script>
        // hover on/hover out sub nav-link
        setTimeout(function() {
            $('.sub_nav-link').hover(function() {
                $(this).css('color', '#A79CEE');
                let $thisLink = $(this).parents('.sub-nav-wrap').index();
                $('.sub-nav-wrap').not(`:eq(${$thisLink})`).each(function(index, el) {
                    $(this).find('.sub_nav-link').css('opacity', '0.3');
                });
            }, function() {
                $('.sub_nav-link').css('color', '#383737');
                $('.sub_nav-link').css('opacity', '1');
            });
        }, 1000);

        // page cursor
        $(function() {
            const cursor = $('.cursor');
            $('.section.mod--moto').mouseenter(function() {
                $(cursor).fadeTo(200, 1);
                $('.button.mod--project.mod--absolute').fadeTo(200, 1);
                $('body').css('cursor', 'none');
            }).mouseleave(function() {
                $(cursor).fadeTo(200, 0);
                $('.button.mod--project.mod--absolute').fadeTo(200, 0);
                $('body').css('cursor', 'auto');
            });
        });

        // loadmore news
        //  $(function() {
        ///    $('.news:not(:nth-child(-n+6))').hide();
        ///   let itemsHidden = $('.c__works-item:hidden');
        ///   if (itemsHidden.length < 1) {
        ///      $("#loadMore").hide();
        ///    }

        ///    $("#loadMore").click(function() {
        //      let itemsShow = $('.news:hidden:eq(0), .news:hidden:eq(1), .news:hidden:eq(2), .news:hidden:eq(3), .news:hidden:eq(4), .news:hidden:eq(5)');
        ///      itemsShow.show();

        ///      itemsHidden = $('.c__works-item:hidden');
        ///     if (itemsHidden.length < 1)
        ///      $(this).hide();
        //  });
        /// });
    </script>
</body>

</html>