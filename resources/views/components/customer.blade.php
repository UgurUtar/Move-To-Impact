<section class="bg-white dark:bg-gray-900 mb-28 relative w-full">
    <div class="mx-auto max-w-screen-xl px-4">
        <h2
            class="mb-8 lg:mb-4 text-3xl font-extrabold tracking-tight leading-tight text-center text-main_dark_blue  dark:text-white md:text-4xl">
            <span lang="en">
                You’ll be in good company
            </span>
            <span lang="nl">
                Je zult in goed gezelschap zijn
            </span>
        </h2>
        <div class="row">
            <div class="container">
                <section class="logo-carousel slider" data-arrows="true">
                    @foreach (File::glob(public_path('images/customers') . '/*') as $path)
                        <div class="slide">
                            <img src="{{ str_replace(public_path(), '', $path) }}">
                        </div>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</section>

<style>
    .slick-slide {
        margin: 0px 20px;
    }

    .logo-carousel {
        overflow: inherit;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-track::before,
    .slick-track::after {
        display: table;
        content: '';
    }

    .slick-track::after {
        clear: both;
    }

    .slick-track {
        padding: 1rem 0;
        display: flex;
        align-items: center;

    }

    .slick-loading .slick-track {
        visibility: hidden;
    }

    .slick-slide.slick-loading img {
        display: none;
    }

    .slick-slide.dragging img {
        pointer-events: none;
    }

    .slick-loading .slick-slide {
        visibility: hidden;
    }

    .slick-arrow {
        position: absolute;
        top: 50%;
        background: url(https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true) center no-repeat;
        color: #fff;
        filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);
        border: none;
        width: 2rem;
        height: 1.5rem;
        text-indent: -10000px;
        margin-top: -16px;
        z-index: 99;
    }

    .slick-arrow.slick-next {
        right: -40px;
        transform: rotate(180deg);
    }

    .slick-arrow.slick-prev {
        left: -40px;
    }

    .row {
        overflow: hidden;
    }
</style>

<script>
    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 2
                }
            }]
        });
    });
</script>