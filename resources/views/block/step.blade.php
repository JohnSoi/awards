<section class="section section-content section-step">
    <div class="container" id="nomination">
        <div class="section-step__inner">
            <div class="border-top-black"></div>
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                Номинации Russian<br>
                @if(Request::url() === Route('index') or ('competition'))
                    Creative Awards 2022
                @else
                    Creative Awards 2021
                @endif

            </h2>
        </div>
    </div>
    <div cursor-status class="swiper-container swiper-step wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="color-card_nom color-card__light bg-pink" >
                    <div class="color-card__title_nom">
                        Человек года <br> в креативных индустриях
                    </div>
                    <div class="color-card__desc_nom">
                        Представитель индустрий: продюсер, руководитель проектных групп, организаций или креатор, чья деятельность направлена на создание уникальных творческих решений и продуктов в различных отраслях.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 1) }}" @else href="javascript://" @endif class="btn btn-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__dark bg-purpule">
                    <div class="color-card__title_nom">
                        Меценат года / <br> поддержка креативных <br> индустрий
                    </div>
                    <div class="color-card__desc_nom">
                        Физические лица, индивидуальные предприниматели, проекты коммерческих и некоммерческих организаций, не относящиеся по основному роду деятельности к креативным индустриям, но осуществляющие их поддержку.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 2) }}" @else href="javascript://" @endif class="btn btn-white-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__dark bg-black" >
                    <div class="color-card__title_nom">
                        Прорыв года
                    </div>
                    <div class="color-card__desc_nom">
                        Проект, продукт или организация, достигшие высоких показателей развития или уникального роста.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 3) }}" @else href="javascript://" @endif class="btn btn-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__light bg-pink ">
                    <div class="color-card__title_nom">
                        Цифровой проект
                    </div>
                    <div class="color-card__desc_nom">
                        Проект в цифровом пространстве или с применением цифровых технологий, способствующий развитию IT-отрасли в России.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 4) }}" @else href="javascript://" @endif class="btn btn-white-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__dark bg-purpule" >
                    <div class="color-card__title_nom">
                        Образовательный проект
                    </div>
                    <div class="color-card__desc_nom">
                        Проект, способствующий повышению уровня знаний в области креативных индустрий, развитию творческих компетенций и навыков.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 5) }}" @else href="javascript://" @endif class="btn btn-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__dark bg-black ">
                    <div class="color-card__title_nom">
                        Лучший креативный кластер
                    </div>
                    <div class="color-card__desc_nom">
                        Креативный кластер или пространство на территории России, которое внесло наибольший вклад в развитие территории района, города, региона.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 6) }}" @else href="javascript://" @endif class="btn btn-white-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__light bg-pink" >
                    <div class="color-card__title_nom">
                        Культурный код
                    </div>
                    <div class="color-card__desc_nom">
                        Проект в сфере креативных индустрий, направленный на сохранение, развитие и идентификацию региональных, национальных или общероссийских ценностей, продуктов, производств и брендов.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 7) }}" @else href="javascript://" @endif class="btn btn-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__dark bg-purpule ">
                    <div class="color-card__title_nom">
                        Креативный <br>регион года
                    </div>
                    <div class="color-card__desc_nom">
                        Субъект Российской Федерации, инициативы которого оказались наиболее эффективными и&nbsp;знаковыми для развития креативной экономики
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 8) }}" @else href="javascript://" @endif class="btn btn-white-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__dark bg-black" >
                    <div class="color-card__title_nom">
                        Креативный социальный <br> проект
                    </div>
                    <div class="color-card__desc_nom">
                        Проект, направленный на решение актуальных социальных проблем, через уникальный творческий подход.
                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 9) }}" @else href="javascript://" @endif class="btn btn-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="color-card_nom color-card__light bg-pink ">
                    <div class="color-card__title_nom">
                        Специальная номинация
                    </div>
                    <div class="color-card__desc_nom">

                    </div>
                    <div class="mt-auto w-100 pt-4" @if(!isset($href) || !$href) style="display: none !important;" elem-hide @endif>
                        <a @if(isset($href) && $href) href="{{ Route('nomination.show', 10) }}" @else href="javascript://" @endif class="btn btn-white-primary w-100">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-navigation slider-navigation__white pl-sm-0 pl-md-0">
            <div class="arrows-nav">
                <div class="arrows-nav__left">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23" cy="23" r="22.5" transform="rotate(-180 23 23)" stroke="#FBFBFB" />
                        <path d="M11.6464 22.6464C11.4512 22.8417 11.4512 23.1583 11.6464 23.3536L14.8284 26.5355C15.0237 26.7308 15.3403 26.7308 15.5355 26.5355C15.7308 26.3403 15.7308 26.0237 15.5355 25.8284L12.7071 23L15.5355 20.1716C15.7308 19.9763 15.7308 19.6597 15.5355 19.4645C15.3403 19.2692 15.0237 19.2692 14.8284 19.4645L11.6464 22.6464ZM34 22.5L12 22.5L12 23.5L34 23.5L34 22.5Z" fill="#FBFBFB" />
                    </svg>
                </div>
                <div class="arrows-nav__right">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="23" cy="23" r="22.5" stroke="#FBFBFB" />
                        <path d="M34.3536 23.3536C34.5488 23.1583 34.5488 22.8417 34.3536 22.6464L31.1716 19.4645C30.9763 19.2692 30.6597 19.2692 30.4645 19.4645C30.2692 19.6597 30.2692 19.9763 30.4645 20.1716L33.2929 23L30.4645 25.8284C30.2692 26.0237 30.2692 26.3403 30.4645 26.5355C30.6597 26.7308 30.9763 26.7308 31.1716 26.5355L34.3536 23.3536ZM12 23.5H34V22.5H12V23.5Z" fill="#FBFBFB" />
                    </svg>
                </div>
            </div>
            <div class="counter">
                <span data-active-count>1</span>
                /
                <span data-all-count></span>
            </div>
        </div>
    </div>
</section>