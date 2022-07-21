<section class="section section-content section-submit">
    @if(!Auth::check())
        <div class="section-submit__blur">
            <div class="section-submit__blur-title">
                {{__('main.form_block1')}} <br> {{__('main.form_block2')}}
            </div>
            <div class="section-submit__blur-text">
                <div class="w-100 mt-auto">
                    <a href="/register">
                        <button class="btn btn-primary w-100">{{__('main.form_login')}}</button>
                    </a>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->group_id !== 1)
        <div class="section-submit__blur">
            <div class="section-submit__blur-title">
                {{__('main.form_polit')}}
            </div>
        </div>
    @elseif (!Auth::user()->email_verified_at)
        <div class="section-submit__blur">
            <div class="section-submit__blur-title">
                {{__('main.form_NeedEmail1')}} <br> {{__('main.form_NeedEmail2')}}
                @if (!session('resent'))
                <div class="section-submit__blur-text">
                    <div class="w-100 mt-auto">
                        <a href="{{ Route('verification.send') }}">
                            <button class="btn btn-primary w-100 mt-4">{{__('main.form_sendAgain')}}</button>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    @endif
    <div class="container" id="submit">
        <div class="border-top-black"></div>
        <div class="section-submit__preheader">
            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s"
                data-wow-delay="0.2s" data-wow-offset="0">
                {{__('main.form_sending')}}
            </h4>
        </div>
            <div id="form-wrapper__type-selector" class="form-wrapper__type-selector w-75 mb-4">
                <div class="w-50 mt-auto form-wrapper__type-selector-border">
                    <button id="form-wrapper__type-selector-individual" class="btn btn-primary form-wrapper__active w-100">{{__('main.form_individual')}}</button>
                </div>
                <div class="w-50 mt-auto">
                    <button id="form-wrapper__type-selector-entity" class="btn btn-primary w-100">{{__('main.form_entity')}}</button>
                </div>
            </div>
            <div id="form-wrapper__individual-wrap" class="form-wrapper__wrap form-wrapper__individual-wrap">
                @include('individual')
            </div>
            <div id="form-wrapper__entity-wrap" class="form-wrapper__wrap form-wrapper__entity-wrap form-wrapper__hidden">
                @include('entity')
            </div>
        <div class="section-submit__footer">
            <a href="/files/Polozhenie_RCA.pdf" target="_blank" class="small-link-un text-center text-md-left">{{__('main.form_poloj')}}
                <div class="d-inline d-sm-none"><br></div>
                RUSSIAN CREATIVE AWARDS</a>
            <a href="https://t.me/Russian_Creative_Week" target="_blank"
               class="small-link-un small-link-un__tg mt-md-0 mt-4">{{__('main.form_help')}}</a>
        </div>
    </div>
</section>
