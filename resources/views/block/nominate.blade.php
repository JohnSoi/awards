<section class="section section-content section-industries">
    <div class="container" id="industries">
        <div class="border-top-black"></div>
        <div class="section-industries__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">{{__('main.short-list_title1')}} <br>{{__('main.short-list_title2')}}</h2>
        </div>
    </div>
    <div class="section-industries__content">
        <div class="industries-list industries-list-m-hidden">
            @include('nomination.shortlist')
        </div>
    </div>
</section>