@if(isset($items) && count($items))
<section class="section section-content section-direction section-expert">
    <div class="container">
        <div class="border-top-black"></div>
        <div class="section-direction__inner">
            <h2 class="section-title mw-100 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Экспертный совет&nbsp;премии</h2>
        </div>
    </div>
    <div class="section-direction__wrapper wow fadeIn" data-white data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">
        <div cursor-status class="swiper-container swiper-expert">
            <div class="swiper-wrapper" data-white>
                @foreach($items as $item)
                <div class="swiper-slide">
                    <div class="direction-item">
                        <div class="direction-item__photo">
                            <img class="lazyload" data-src="{{ ImageUrl($item->user->photo, 500) }}">
                        </div>
                        <div class="direction-item__name">{!! str_replace(' ', '<br>', $item->user->name) !!}</div>
                        @if($item->user->position)
                        <div class="direction-item__position h-100">{!! $item->user->position !!}</div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-navigation slider-navigation__white pl-sm-0 pl-md-0">
                <div class="arrows-nav arrows-nav">
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
    <div class="section-direction__btn container">
        <a href="{{ Route('expert.index') }}" class="btn btn-primary w-sm-100">Все эксперты</a>
    </div>
</section>
@endif