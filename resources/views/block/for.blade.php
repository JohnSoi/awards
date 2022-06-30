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
                <div class="section-for__bigtitle text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">{{__('main.for_what')}}</div>
                <div class="section-for__text">
                    @if(Request::url() === Route('index'))
                        <p class="text text-all_width text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                           data-wow-offset="30">
                           {{__('main.for_desc1')}}
                            <br><br>
                            {{__('main.for_desc2')}}
                            <br><br>
                            {{__('main.for_desc3')}}
                        </p>
                    @else
                        <p class="text text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                           data-wow-offset="30">
                            {{__('main.for_ElseDesc1')}}&nbsp;{{__('main.for_ElseDesc1.2')}}
                            <br><br>
                            {{__('main.for_ElseDesc2')}}&nbsp{{__('main.for_ElseDesc2.2')}}
                            <br><br>
                            {{__('main.for_ElseDesc3.1')}}&nbsp{{__('main.for_ElseDesc3.2')}}&nbsp{{__('main.for_ElseDesc3.3')}}
                            @if(Request::url() === Route('index'))
                                {{__('main.for_yearAward')}}&nbsp{{__('main.for_year1')}}
                            @else
                                {{__('main.for_yearAward')}}&nbsp{{__('main.for_year2')}}
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
                        {{__('main.for_Quote')}}&nbsp{{__('main.for_Quote2')}}&nbsp{{__('main.for_Quote3')}}&nbsp{{__('main.for_Quote4')}}&nbsp{{__('main.for_Quote5')}}&nbsp{{__('main.for_Quote6')}}&nbsp{{__('main.for_Quote7')}}
                    </div>
                    <div class="section-for__quote-name text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" data-wow-offset="30">
                        {{__('main.for_name')}}
                    </div>
                    <div class="section-for__quote-devider devider devider-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" data-wow-offset="30"></div>
                    <div class="section-for__quote-footer text-white wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s" data-wow-offset="30">
                        {{__('main.for_nameDesc1')}}<span class="d-md-inline d-sm-inline d-none"><br></span>
                        {{__('main.for_nameDesc2')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>