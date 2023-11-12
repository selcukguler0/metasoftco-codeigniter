<div data-w-id="ded674c7-7d1b-3d45-e217-fecdcbd0fb41" class="preloader__wrap">
    <div data-w-id="ded674c7-7d1b-3d45-e217-fecdcbd0fb42" data-is-ix2-target="1" class="preloader__lottie"
        data-animation-type="lottie"
        data-src="https://global-uploads.webflow.com/6384adc4346ef2fe20a7f69b/63aad23903bbda993653f042_x2.json"
        data-loop="1" data-direction="1" data-autoplay="0" data-renderer="svg"
        data-default-duration="1.2679345496239027" data-duration="0" data-ix2-initial-state="0"></div>
</div>
<div class="global-styles w-embed">
    <style>
        /* Snippet gets rid of top margin on first element in any rich text*/
        .w-richtext>:first-child {
            margin-top: 0;
        }

        /* Snippet gets rid of bottom margin on last element in any rich text*/
        .w-richtext>:last-child,
        .w-richtext ol li:last-child,
        .w-richtext ul li:last-child {
            margin-bottom: 0;
        }

        /* Snippet prevents all click and hover interaction with an element */
        .clickable-off {
            pointer-events: none;
        }

        /* Snippet enables all click and hover interaction with an element */
        .clickable-on {
            pointer-events: auto;
        }

        /* Snippet enables you to add class of div-square which creates and maintains a 1:1 dimension of a div.*/
        .div-square::after {
            content: "";
            display: block;
            padding-bottom: 100%;
        }

        /*Hide focus outline for main content element*/
        main:focus-visible {
            outline: -webkit-focus-ring-color auto 0px;
        }

        /* Make sure containers never lose their center alignment*/
        .container-medium,
        .container-small,
        .container-large {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        /*Reset buttons, and links styles*/
        a {
            color: inherit;
            text-decoration: inherit;
            font-size: inherit;
        }

        /*Apply "..." after 3 lines of text */
        .text-style-3lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        /*Apply "..." after 2 lines of text */
        .text-style-2lines {
            display: -webkit-box;
            overflow: hidden;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        /*Fluid responsive */
        html {
            font-size: 1rem;
        }

        @media screen and (min-width:1440px) {
            html {
                font-size: calc(0.5000000000000003rem + 0.6249999999999998vw);
            }
        }

        @media screen and (max-width: 1400px) and (min-width: 768px) {
            html {
                font-size: 1.15vw;
            }
        }

        /*@media screen and (max-width: 767px) { html { font-size: 3vw; } }*/
        .category-list::-webkit-scrollbar-track,
        .fs-tok-main-wrapper::-webkit-scrollbar-track {
            background: transparent;
        }

        .category-list::-webkit-scrollbar-thumb,
        .fs-tok-main-wrapper::-webkit-scrollbar-thumb {
            background: transparent;
        }

        /*adaptiva menu*/

        @media screen and (max-width:767px) {
            .nav_wrapper {
                padding-top: calc(0.5rem + 6vh);
                padding-bottom: calc(0.5rem + 6vh);
            }

            .nav {
                margin-bottom: calc(0.5rem + 6vh);
            }

            .accordion-item:first-child {
                border-top: 1px solid rgba(56, 55, 55, 0.2);
            }
        }

        /* menu - header*/
        .col.col--2.mod--header.open {
            max-height: 150vh
        }

        .col.mod--menu_btn.active {
            background-color: #fff;
        }

        .col.mod--menu_btn.active .menu-line.mod--1 {
            top: 3px;
            transform: rotate(-45deg);
            filter: brightness(0%)
        }

        .col.mod--menu_btn.active .menu-line.mod--2 {
            top: -4px;
            width: 100%;
            transform: rotate(45deg);
            filter: brightness(0%)
        }

        .col.col--2.mod--header.open~.col.col--3.mod--header {
            opacity: 0;
        }

        /* Header and footer*/

        .nav-link::after,
        .nav__link.mod--footer::after {
            content: '';
            position: absolute;
            bottom: -0.25rem;
            left: 0;
            width: 0%;
            height: 0.125rem;
            background-color: #fb3e2d;
            transition-duration: 400ms;
        }

        @media (min-width: 768px) {
            [nav-link-anim]:hover .nav-link::after {
                width: 100%;
            }

            [nav-link-anim]:hover .nav-link {
                color: #fb3e2d;
            }

            [nav-link-anim]:hover .nav_links-menu {
                top: 101%;
                opacity: 1;
            }

            [compos-img-anim]:hover {
                transform: rotate(-18deg)
            }

            .sub_nav-link:hover {
                opacity: 1 !important;
            }
        }

        .social-link::after,
        .help_link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #fff;
            height: 0.063rem;
            width: 0%;
            transition-duration: 400ms;
        }

        .social-link-wrap:hover .social-link::after,
        .help_link:hover::after {
            width: 100%;
        }

        .social-link-wrap:hover .social_svg-wrap {
            background-color: #FB3E2D;
        }

        .social-link-wrap:hover .social_svg {
            filter: brightness(1000%)
        }

        .social-link-wrap.mod--contact:hover {
            background: #A79CEE;
        }

        .social-link-wrap.mod--contact:hover .social_svg-wrap {
            background-color: white;
        }

        .social-link-wrap.mod--contact:hover .social_svg {
            filter: brightness(100%)
        }

        .social-link-wrap.mod--contact:hover .social-link::after {
            width: 0%;
        }

        /* section form */
        form {
            display: block !important;
        }

        .w-form-done {
            display: none !important;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:focus {
            transition: background-color 600000s 0s, color 600000s 0s;
        }

        textarea {
            resize: none;
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent
        }

        textarea:focus::-moz-placeholder {
            color: transparent
        }

        textarea:focus:-moz-placeholder {
            color: transparent
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent
        }

        .input.mod--textarea::-webkit-scrollbar {
            display: none;
        }

        .form_btn.mod--back:hover .btn__arrow,
        .btn_scroll-up:hover img {
            filter: brightness(1000%);
        }

        .cursor__wrapper,
        .cursor__wrapper2,
        .preloader__wrap {
            pointer-events: none;
        }

        .w-file-upload-file-name {
            font-size: 1rem !important;
            font-weight: 600 !important;
        }
    </style>
</div>
<div class="slyle w-embed">
    <style>
        /* header */
        .section.mod--header {
            color: #383737;
        }

        .content.mod--header {
            background-color: #E9E9E9;
        }

        .nav__link-wrap {
            background-color: #E9E9E9;
        }

        .nav_links-menu {
            background-color: #E9E9E9;
            border-color: rgba(56, 55, 55, 0.3);
        }

        .col.col--1.mod--header,
        .col.col--3.mod--header {
            border-color: rgba(56, 55, 55, 0.3);
        }

        .col.col--2.mod--header {
            background-color: #E9E9E9;
        }

        .col.mod--menu_btn {
            border-color: rgba(56, 55, 55, 0.3);
        }

        .dropdown_btn {
            color: #383737;
        }

        .menu-line {
            background-color: #383737;
        }

        /* hero section*/
        .btn_scroll:hover>a {
            transform: scale(0.8)
        }

        .swiper[data-swiper='instagram'] {
            overflow: visible !important;
        }

        .swiper[data-swiper='instagram'] .swiper-slide {
            width: auto !important;
        }

        .swiper-pagination {
            width: 82rem !important;
            bottom: -6.25rem;
            top: auto !important;
            height: 0.25rem !important;
            background: rgba(56, 55, 55, 0.1) !important;
        }

        .swiper-pagination.mod--light {
            bottom: -3.625rem;
            background: rgba(255, 255, 255, 0.1) !important;
        }

        @media (max-width: 767px) {

            .swiper-pagination,
            .swiper-pagination.mod--light {
                bottom: -3rem !important;
            }

            .swiper-pagination {
                width: auto !important;
            }
        }

        .swiper-pagination.mod--light .swiper-pagination-progressbar-fill {
            background: #fff !important;
        }

        .swiper[data-swiper='ahead'] .swiper-slide-thumb-active .default__text.mod--bg {
            background-color: #A79CEE;
        }

        @media (min-width: 768px) {
            .swiper[data-swiper='ahead'] .swiper-wrapper {
                transform: translate3d(0px, 0px, 0px) !important;
            }

            .swiper[data-swiper='ahead'] .swiper-slide {
                width: auto !important;
                height: auto !important;
                transform: translate3d(0px, 0px, 0px) !important;
                opacity: 1 !important;
            }
        }

        .swiper[data-swiper='ahead-content'] {
            margin: 0 !important;
        }

        .swiper[data-swiper='ahead'] .swiper-slide {
            width: auto !important;
            /* height: auto !important;*/
            opacity: 1 !important;
        }

        .swiper[data-swiper='ahead-content'] .swiper-slide {
            width: auto !important;
            opacity: 0 !important;
        }

        .swiper[data-swiper='ahead-content'] .swiper-slide-active {
            opacity: 1 !important;
        }

        @media (min-width: 768px) and (max-width: 1439px) {
            .ahead__title {
                margin-right: 4rem;
            }
        }

        @media (min-width: 1640px) {
            .ahead__title {
                margin-right: 6rem;
            }
        }

        .cursor__wrapper,
        .preloader__wrap {
            pointer-events: none;
        }
    </style>
</div>