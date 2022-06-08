<section class="section section-content section-submit">
    @if(!Auth::check())
        <div class="section-submit__blur">
            <div class="section-submit__blur-title">
                Для подачи заявки <br> необходимо авторизоваться.
            </div>
            <div class="section-submit__blur-text">
                <div class="w-100 mt-auto">
                    <a href="/register">
                        <button class="btn btn-primary w-100">Войти</button>
                    </a>
                </div>
            </div>
        </div>
    @endif
    <div class="container" id="submit">
        <div class="border-top-black"></div>
        <div class="section-submit__preheader">
            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s"
                data-wow-delay="0.2s" data-wow-offset="0">
                Подача заявки
            </h4>
        </div>
            <div id="form-wrapper__type-selector" class="form-wrapper__type-selector w-75 mb-4">
                <div class="w-50 mt-auto form-wrapper__type-selector-border">
                    <button id="form-wrapper__type-selector-individual" class="btn btn-primary form-wrapper__active w-100">Физическое лицо</button>
                </div>
                <div class="w-50 mt-auto">
                    <button id="form-wrapper__type-selector-entity" class="btn btn-primary w-100">Юридическое лицо</button>
                </div>
            </div>
            <div id="form-wrapper__individual-wrap" class="form-wrapper__wrap form-wrapper__individual-wrap">
                @include('individual')
            </div>
            <div id="form-wrapper__entity-wrap" class="form-wrapper__wrap form-wrapper__entity-wrap form-wrapper__hidden">
                @include('entity')
            </div>
        <div class="section-submit__footer">
            <a href="/files/Polozhenie_RCA.pdf" target="_blank" class="small-link-un text-center text-md-left">Положение
                о проведении
                <div class="d-inline d-sm-none"><br></div>
                RUSSIAN CREATIVE AWARDS</a>
            <a href="https://t.me/Russian_Creative_Week" target="_blank"
               class="small-link-un small-link-un__tg mt-md-0 mt-4">Техническая поддержка</a>
        </div>
    </div>
</section>
