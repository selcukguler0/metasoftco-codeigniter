<!DOCTYPE html>
<html data-wf-domain="www.Metasoftco.com" data-wf-page="63905a7507672b17fee38cc3" data-wf-site="6384adc4346ef2fe20a7f69b" data-wf-status="1">

<head>
    <?php echo view("layouts/head.php"); ?>
    <title>
        <?php echo $blog->title ?>
    </title>
    <meta content="<?php echo $blog->title ?>" property="og:title">
    <meta content="https://global-uploads.webflow.com/6387292b497f3bfaa481d2fb/63dd3153a8621656f079ea88_funeral.png" property="og:image">
    <meta content="<?php echo $blog->title ?>" property="twitter:title">
    <meta content="https://global-uploads.webflow.com/6387292b497f3bfaa481d2fb/63dd3153a8621656f079ea88_funeral.png" property="twitter:image">
    <meta http-equiv="content-language" content="tr">
    <link href="/static/style.css" rel="stylesheet" type="text/css">
    <style>
        @media (min-width:992px) {
            html.w-mod-js:not(.w-mod-ix) [data-w-id="9953b174-5f55-6e26-e396-f58a8bcfb740"] {
                opacity: 1;
            }

            html.w-mod-js:not(.w-mod-ix) [data-w-id="9953b174-5f55-6e26-e396-f58a8bcfb73f"] {
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
            background-image: url("../63285965f554791ee9971f97/632964cdaf732278e755cafb_Noise.webp");
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
    </style><!-- [Attributes by Finsweet] Social Share -->

</head>

<body>
    <?php echo view("layouts/body-top.php"); ?>
    <div class="page-wrap">

        <?php echo view("layouts/header.php"); ?>
        <main class="main">
            <section id="hero" class="section mod--color__grey mod--news__info">
                <div class="content mod--padding0">
                    <div class="content_col mod--news__info">
                        <div class="news__cat-wrap w-dyn-list">
                            <div fs-cmsnest-collection="news-categories" role="list" class="news__cat-list w-dyn-items">
                                <?php foreach ($blog->tags as $tag) : ?>
                                    <div role="listitem" class="news__cat-item w-dyn-item"><a href="/news-categories/brand-advertising" class="news__cat-link">
                                            <?php echo $tag; ?>
                                        </a></div>
                                <?php endforeach; ?>


                            </div>
                        </div>
                        <div class="col mod--news__info mod--head">
                            <h1 class="titile--h1 maxw-855">
                                <?php echo $blog->title; ?>
                            </h1>
                            <div class="news__main-info">
                                <div class="news__col mod--none">
                                    <div class="news__col-title">Tarih</div>
                                    <div class="news__col-text"> <?php echo $blog->createdAt; ?>
                                    </div>
                                </div>
                                <div class="news__col mod--none">
                                    <div class="news__col-title">Okuma Süresi</div>
                                    <div class="news__col-text"> <?php echo $blog->readTime; ?>
                                        Dk.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col mod--news__info mod--head mod--padding_bottom mod--mob">
                            <div class="news__col mod--last_child">
                                <div class="news__col-title">Tarih</div>
                                <div class="news__col-text"> <?php echo $blog->createdAt; ?>
                                </div>
                            </div>
                            <div class="news__col">
                                <div class="news__col-title">Okuma Süresi</div>
                                <div class="news__col-text"> <?php echo $blog->readTime; ?>
                                    Dk.</div>
                            </div>
                        </div>
                    </div>
                    <div class="content_col mod--news__content">
                        <div class="col mod--news__info mod--margin-auto">
                            <div class="news__nav-content">
                                <div class="sticky__block mod--nav__news">
                                    <div class="nav__text">Blog İçeriği:</div>
                                    <div class="fs-tok-main-wrapper">
                                        <div class="fs-tok_link-wrapper"><a href="#" class="fs-toc_link w-inline-block">
                                                <div fs-toc-element="link" class="fc-tok_lin-text"></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div fs-toc-offsettop="5rem" fs-toc-element="contents" class="news__rich-text w-richtext">
                                <h2>
                                    <?php echo $blog->title; ?>

                                </h2>
                                <?php echo $blog->content; ?>

                            </div>
                            <div class="share__wrap">
                                <div class="share__title">Beğendin mi?  <span class="subtitle_span color-violet mod--dispaly">paylaş!</span></div>
                                <div class="social-links-wrap mod--contact mod--share">
                                    <a fs-socialshare-element="instagram" href="https://www.instagram.com/metasoftco/" target="_blank" class="social-link-wrap mod--contact mod--share w-inline-block">
                                        <div class="social-link mod--share">Instagram</div>
                                        <div class="social_svg-wrap mod--grey"><img src="../6384adc4346ef2fe20a7f69b/6388b29011d3acafe9bbe906_arrow_black-rotate.svg" loading="lazy" alt="" class="social_svg"></div>
                                    </a>
                                    <a fs-socialshare-element="linkedin" href="https://www.linkedin.com/company/metasoftco" target="_blank" class="social-link-wrap mod--contact mod--share w-inline-block">
                                        <div class="social-link mod--share">Linkedin</div>
                                        <div class="social_svg-wrap mod--grey"><img src="../6384adc4346ef2fe20a7f69b/6388b29011d3acafe9bbe906_arrow_black-rotate.svg" loading="lazy" alt="" class="social_svg"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php if ($otherBlogs) : ?>
                <section class="section mod--color__white mod--articles">
                    <div class="content mod--article mod--mob__padding">
                        <div class="content_col mod--flex_center mod--article">
                            <h2 class="mod--project mod--articles">DİĞER BLOG YAZILARI</h2>
                            <div class="swiper__nav">
                                <div data-swiper="article-prev" class="swiper__arrow mod--reverse"></div>
                                <div data-swiper="article-next" class="swiper__arrow"></div>
                            </div>
                        </div>
                        <div class="content_col mod--article">
                            <div data-swiper="article" class="swiper w-dyn-list">
                                <div role="list" class="swiper-wrapper mod--align w-dyn-items">
                                    <?php foreach ($otherBlogs as $blog) : ?>
                                        <div role="listitem" class="swiper-slide w-dyn-item">
                                            <div class="article__wrap">
                                                <div class="article__news-info"><a href="/bloglar/<?php echo $blog->slug ?>" class="article__img-link w-inline-block"><img src="/blog/<?php echo $blog->img ?>" style="object-fit: cover;" loading="lazy" alt="" sizes="(max-width: 767px) 254px, 30vw" class="article__img"></a>
                                                    <div class="article__date">
                                                        <?php echo $blog->createdAt ?>
                                                    </div><a href="/blog/<%= blog.slug %>" class="article__title">
                                                        <?php echo $blog->title ?>
                                                    </a>
                                                </div>
                                                <div class="article__cat-wrap w-dyn-list">
                                                    <div role="list" class="article__cat-list w-dyn-items">
                                                        <?php foreach ($blog->tags as $tag) : ?>
                                                            <div role="listitem" class="article__cat-item w-dyn-item">
                                                                <div class="article__cat-name">
                                                                    <?php echo $tag ?>
                                                                </div>
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="swiper-pagination mod--dark"></div>
                        </div>
                    </div>
                </section>
            <?php endif ?>

        </main>
        <?php echo view("layouts/footer.php"); ?>
    </div>
    <?php echo view("layouts/contact-modal.php"); ?>
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/index.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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
                $('.sub_nav-link').css('color', '#fff');
                $('.sub_nav-link').css('opacity', '1');
            });
        }, 1000);

        /// section Article
        const swiper_article = new Swiper("[data-swiper=article]", {
            speed: 600,
            loop: true,
            spaceBetween: 18,
            navigation: {
                nextEl: '[data-swiper=article-next]',
                prevEl: '[data-swiper=article-prev]',
            },
            pagination: {
                el: '.swiper-pagination.mod--dark',
                type: 'progressbar',
            },
            breakpoints: {
                320: {
                    spaceBetween: 24,
                    slidesPerView: 'auto',
                },
                1200: {
                    spaceBetween: 48,
                    slidesPerView: 'auto',
                }
            },
        });
    </script>

</body>

</html>