<section class="section section-content section-history">
    <div class="container" id="graphic">
        <div class="section-history__inner">
            <div class="border-top-black"></div>
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">График проведения
                Премии
            </h2>
        </div>
    </div>
    <div class="container section-history__content section-history__content-new section-history__content-slider">
        <div class="container section-history__wrapper wow fadeIn" data-wow-duration="0.8s"
             data-wow-delay="0.2s" data-white>
            <div class="section-history__item">
                <div class="card-timeline">
                    <div class="card-timeline__date">07.07</div>
                    <div
                            class="card-timeline__point
                                   card-timeline__point-{{ \App\Helpers\TimelineHelpers::getClassPrefixHistoryPoint('06.07.2022', '08.07.2022') }}"
                            title="{{ \App\Helpers\TimelineHelpers::getTitleHistoryPoint('06.07.2022', '08.07.2022') }}"
                    >
                    </div>
                    <div class="card-timeline__desc">Старт Russian Creative Week</div>
                </div>
            </div>
            <div class="section-history__item">
                <div class="card-timeline">
                    <div class="card-timeline__date">07.07 – 25.09</div>
                    <div class="card-timeline__point
                                   card-timeline__point-{{ \App\Helpers\TimelineHelpers::getClassPrefixHistoryPoint('06.07.2022', '26.09.2022') }}"
                            title="{{ \App\Helpers\TimelineHelpers::getTitleHistoryPoint('06.07.2022', '26.09.2022') }}"></div>
                    <div class="card-timeline__desc">Прием заявок</div>
                </div>
            </div>
            <div class="section-history__item">
                <div class="card-timeline">
                    <div class="card-timeline__date">03.10 – 30.10</div>
                    <div class="card-timeline__point
                                   card-timeline__point-{{ \App\Helpers\TimelineHelpers::getClassPrefixHistoryPoint('02.10.2022', '31.10.2022') }}"
                            title="{{ \App\Helpers\TimelineHelpers::getTitleHistoryPoint('02.10.2022', '31.10.2022') }}"></div>
                    <div class="card-timeline__desc">Работа экспертов</div>
                </div>
            </div>
            <div class="section-history__item">
                <div class="card-timeline">
                    <div class="card-timeline__date">07.11 – 27.11</div>
                    <div class="card-timeline__point
                                   card-timeline__point-{{ \App\Helpers\TimelineHelpers::getClassPrefixHistoryPoint('06.11.2022', '28.11.2022') }}"
                            title="{{ \App\Helpers\TimelineHelpers::getTitleHistoryPoint('06.11.2022', '28.11.2022') }}"></div>
                    <div class="card-timeline__desc">Работа жюри</div>
                </div>
            </div>
            <div class="section-history__item">
                <div class="card-timeline">
                    <div class="card-timeline__date">09.12</div>
                    <div class="card-timeline__point
                                   card-timeline__point-{{ \App\Helpers\TimelineHelpers::getClassPrefixHistoryPoint('08.12.2022', '10.12.2022') }}"
                            title="{{ \App\Helpers\TimelineHelpers::getTitleHistoryPoint('08.12.2022', '10.12.2022') }}"></div>
                    <div class="card-timeline__desc">Торжественная церемония вручения премии
                    </div>
                </div>
            </div>
        </div>
        <div class="section-for__animated">
            <div class="section-for__animated-figure">
                <div id="television"></div>
                <svg xmlns="http://www.w3.org/2000/svg" style="opacity: 0; visibility: hidden; position:absolute; bottom: 0; left: 0; z-index: -1;">
                    <defs>
                        <linearGradient id="violet_gradient" x1="0%" y1="0%" x2="0%" y2="100%" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#1E1E1E" />
                            <stop offset="100%" stop-color="#C3A5F2" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="section-for__animated-pic">
                <picture>
                    <img data-src="/img/V2/page/main/card/gradient/ellipse.svg" class="lazyload">
                </picture>
            </div>
        </div>
    </div>
</section>
