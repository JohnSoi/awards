<section class="section section-content section-for" id="about-award">
    <div class="black-gradient"></div>
    <div class="container position-relative">
        <div class="border-top-white"></div>
        <div class="section-for__title">
            <h2 class="section-title text-white mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                R.C.AWARDS
            </h2>
        </div>
        <div class="section-for__inner">
            <div class="section-for__left section-for__left-new">
                <div class="section-for__bigtitle text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">Для чего?</div>
                <div class="section-for__text">
                    @if(Request::url() === Route('index'))
                        <p class="text text-all_width text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                           data-wow-offset="30">
                            Премия Russian Creative Awards ежегодно вручается за вклад в развитие креативных индустрий
                            страны.
                            Премия призвана отметить наиболее успешных деятелей, проекты, разработанные в креативном
                            секторе,
                            обеспечить им поддержку и национальное признание.
                            <br><br>
                            Премия способствует популяризации деятельности представителей креативных индустрий,
                            укреплению межотраслевых связей креативного сообщества по всей стране, а также формированию
                            и
                            развитию современной российской культуры и идентичности.
                            <br><br>
                            Лауреатами становятся физические лица и организации, внесшие значимый вклад в развитие
                            креативных индустрий.
                        </p>
                    @else
                        <p class="text text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                           data-wow-offset="30">
                            Премия призвана выявить наиболее успешные практики, разработанные в креативном секторе нашей страны,
                            обеспечить им поддержку и&nbsp;национальное признание.
                            <br><br>
                            Премия позволит отметить и&nbsp;выделить
                            лучшие креативные достижения страны.
                            <br><br>
                            Наградить авторов и&nbsp;с их помощью вывести Россию
                            в&nbsp;число передовых креативных держав мира.
                            @if(Request::url() === Route('index'))
                                Премия&nbsp;подводит итоги 2021-2022гг.
                            @else
                                Премия&nbsp;подводит итоги 2020-2021гг.
                            @endif
                        </p>
                    @endif
                </div>
            </div>
            <div class="section-for__right section-for__right-new">
                <div class="section-for__figure-new section-for__figure wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                    <div id="mainspring"></div>
                </div>
            </div>
        </div>
        <div class="section-new">
            <div class="">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" style="opacity: 0; visibility: hidden; position:absolute; bottom: 0; left: 0; z-index: -1;">
                        <defs>
                            <linearGradient id="violet_gradient" x1="0%" y1="0%" x2="0%" y2="100%" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#1E1E1E" />
                                <stop offset="100%" stop-color="#C3A5F2" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="section-for__quote-new">
                <div class="avatar__wrapper">
                    <div class="section-for__avatar wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                        <picture>
                            <source srcset="{{ mix('page_image/sergei_kirienko.jpg') }}" media="(min-width: 768px)">
                            <img data-src="{{ mix('page_image/sergei_kirienko.jpg') }}" class="lazyload">
                        </picture>
                    </div>
                </div>
                <div class="section-for__quote">
                    <div class="section-for__quote-text text text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                        «Мне очень нравится идея, которая родилась на&nbsp;Российской креативной неделе, о&nbsp;том, чтобы сделать в&nbsp;следующем году первую российскую национальную премию за&nbsp;успехи и&nbsp;достижения в&nbsp;креативных индустриях».
                    </div>
                    <div class="section-for__quote-name text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" data-wow-offset="30">
                        Сергей Кириенко
                    </div>
                    <div class="section-for__quote-devider devider devider-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" data-wow-offset="30"></div>
                    <div class="section-for__quote-footer text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s" data-wow-offset="30">
                        Первый заместитель руководителя <span class="d-md-inline d-sm-inline d-none"><br></span>
                        Администрации Президента РФ
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>