<section class="section section-content section-award" id="ceremony">
    <div class="container position-relative">
        <div class="border-top-white"></div>
        <div class="section-award__title">
            <h2 class="section-title text-white mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">
                @if(Request::url() === Route('index'))
                    R.C.AWARDS  2022
                @else
                    R.C.AWARDS 2021
                @endif
            </h2>
        </div>
        <div class="section-award__inner">
            <div class="section-award__left">
                <div class="video-live" data-toggle="modal" data-target="#getVideo">
                    <div class="video-live__play"></div>
                    <div class="video-live__preview">
                    <picture>
                        <img data-src="/img/V2/page/main/card/gradient/preview-min.jpg" class="lazyload">
                    </picture>
                    </div>
                    <div class="video-live__figure wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
                        <picture>
                            <source srcset="/img/V2/page/main/card/gradient/figure_award.png" media="(min-width: 768px)">
                            <img data-src="/img/V2/page/main/card/gradient/figure_award-sm.png" class="lazyload">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="section-award__right">
                <div class="section-award__right-title">
                    <span class="text-white font-weight-100">{{__('main.cer_main')}}</span><br>
                    <span class="text-semipink font-weight-600">{{__('main.cer_rc')}}</span>
                </div>
                <div class="section-award__text">
                    <p class="text text-white">
                        {{__('main.cer_text1')}}&nbsp;{{__('main.cer_text2')}}&nbsp;{{__('main.cer_text3')}} <br class="d-inline d-sm-none">{{__('main.cer_text4')}}&nbsp;{{__('main.cer_text5')}}&nbsp;{{__('main.cer_text6')}}&nbsp;{{__('main.cer_text7')}}&nbsp;{{__('main.cer_text8')}}&nbsp;{{__('main.cer_text9')}} <br class="d-lg-inline d-none">{{__('main.cer_text10')}}&nbsp;{{__('main.cer_text12')}}
                    </p>
                    <br>
                    <a href="{{ Route('index') }}/rc-award.pdf" target="_blank" class="links links__arrow-right text-white">{{__('main.cer_text11')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>