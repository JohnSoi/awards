<section class="section section-content section-collapse">
    <div class="container" id="industries">
        <div class="border-top-black"></div>
        <div class="section-collapse__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"
                data-wow-offset="0">{{ App::isLocale('en') ? 'SHORTLIST' : 'ШОРТ-ЛИСТ' }}
                <br>{{ App::isLocale('en') ? 'AND THE WINNER OF THE AWARD' : 'И ЛАУРЕАТ ПРЕМИИ'}}</h2>
        </div>
    </div>
    <div class="container">
        <div class="section-collapse__content" id="shortlistCollapsible">
            @foreach($projects as $project)
            @include('nomination.collapse-shortlist', $project)
            @endforeach
        </div>
    </div>
</section>