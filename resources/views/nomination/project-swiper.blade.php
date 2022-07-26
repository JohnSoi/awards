<div class="swiper-container swiper-project px-xl-0 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
    <div class="swiper-wrapper">
        @foreach($projects as $project)
        <div class="swiper-slide">
            <div class="mini-project">
                <div class="mini-project__preview">
                    <picture>
                        <img data-src="{{ ImageUrl($project->image, 266, false, '/img/V2/page/main/card/gradient/logo5.svg') }}" class="lazyload">
                    </picture>
                    @if($project->is_winner)
                    <div class="mini-project__winner">
                        <picture>
                            <img data-src="/img/V2/page/main/card/gradient/winner-icon.png" class="lazyload">
                        </picture>
                    </div>
                    @endif
                </div>
                <div class="mini-project__title">{{ App::isLocale('en') ? $project->name_nominate_en : $project->name_nominate }}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>