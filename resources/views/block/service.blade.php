<link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
<link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">
<section class="section section-content section-service">
    <div class="container">
        <div class="section-service__inner">
            <div class="border-top-white"></div>
            <h2 class="section-title mb-0 wow fadeInUp mw-100" data-wow-duration="0.8s" data-wow-delay="0.2s">
                @if(Request::url() === Route('index') or ('competition'))
                    Лауреаты Russian Creative Awards 2022 получат:
                @else
                    Лауреаты Russian Creative Awards 2021 получат:
                @endif
            </h2>
        </div>
        <div class="section-service__content">
            <div class="service-grid">
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Медиасопровождение от
                        <br>организаторов и партнеров Премии
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Возможность представить свои
                        @if(Request::url() === Route('index'))
                            <br>проекты в рамках Экспо2022 в Дубае
                        @else
                            <br>проекты в рамках Экспо2021 в Дубае
                        @endif
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Национальное
                        <br>признание
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Благодарности от
                        <br>руководства страны
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">
                        Публикация в специальном<br>
                        сборнике «Russian Creative
                        <br>Awards: лучшие среди равных»
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="service-card__item wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="service-card__point"></div>
                    <div class="service-card__desc">Сопровождение со стороны <br>организаторов Премии</div>
                </div>
                <!-- card -->
            </div>
            <div class="service-swiper">
                <div class="swiper-container swiper-eco wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="swiper-wrapper">
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Медиасопровождение от
                                    <br>организаторов и партнеров Премии
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">
                                    @if(Request::url() === Route('index'))
                                        Возможность представить свои
                                        проекты в рамках Экспо2022 в Дубае
                                    @else
                                        Возможность представить свои
                                        проекты в рамках Экспо2021 в Дубае
                                    @endif

                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Национальное<br>
                                    признание
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Благодарности от<br>
                                    руководства страны</div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">
                                    Публикация в специальном
                                    сборнике «Russian Creative<br>
                                    Awards: лучшие среди равных»
                                </div>
                            </div>
                        </div>
                        <!-- slides -->
                        <!-- slides -->
                        <div class="swiper-slide">
                            <div class="service-card__item">
                                <div class="service-card__point"></div>
                                <div class="service-card__desc">Сопровождение со стороны <br>
                                    организаторов Премии</div>
                            </div>
                        </div>
                        <!-- slides -->
                    </div>
                    <div class="slider-navigation pl-sm-0 pl-md-0">
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
            </div>
        </div>
    </div>
</section>